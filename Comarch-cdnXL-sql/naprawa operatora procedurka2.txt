USE [CDNXL_HANDEL]
GO
/****** Object:  StoredProcedure [dbo].[NMS_NaprawaOper]    Script Date: 11/28/2016 05:52:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[NMS_NaprawaOper]	 
	
AS
BEGIN
--Insert brakujących GIDNumer, GIDLp z CDN.MagElem jeśli dokument został założony poprawnie przez kolektor w tabeli NMS_bi_wm
BEGIN
	SET NOCOUNT ON;
	INSERT INTO nms_bi_wm
	(gidnumer, gidlp, data)
SELECT        CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_GIDLp, getdate ()
FROM            nms_bi_wm AS nms_bi_wm_2 INNER JOIN
                         CDN.MagNag ON nms_bi_wm_2.GIDNumer = CDN.MagNag.MaN_GIDNumer INNER JOIN
                         CDN.MagElem ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer LEFT OUTER JOIN
                         nms_bi_wm AS nms_bi_wm_1 ON nms_bi_wm_2.GIDNumer = nms_bi_wm_1.GIDNumer AND CDN.MagElem.MaE_GIDLp = nms_bi_wm_1.GIDLp
WHERE        (nms_bi_wm_1.GIDLp IS NULL) AND (nms_bi_wm_2.GIDLp = 0)
END
--Update top(1) operatorów z elementów NMS_TrnElem
BEGIN 
UPDATE       nms_bi_wm
SET                oper =
                             (SELECT        TOP (1) NMS_TrnElem.E_Oper
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id)), oper1 =
                             (SELECT        TOP (1) NMS_TrnElem.E_Oper1
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id)), oper2 =
                             (SELECT        TOP (1) NMS_TrnElem.E_Oper2
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id)), opersuma =
                             (SELECT        TOP (1) NMS_TrnElem.E_OperSuma
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id)),
							  e_id= (SELECT        TOP (1) NMS_TrnElem.e_id
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id)),
							   N_id= (SELECT        TOP (1) NMS_TrnElem.E_IdO
                               FROM            NMS_TrnElem AS nms_trnelem_1
                               WHERE        (nms_trnelem_1.e_id = nms_trnelem.E_Id))
FROM            nms_bi_wm AS nms_bi_wm_1 INNER JOIN
                         NMS_TrnNag ON nms_bi_wm_1.N_id = NMS_TrnNag.N_Id INNER JOIN
                         NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                         nms_bi_wm ON nms_bi_wm_1.GIDNumer = nms_bi_wm.GIDNumer
WHERE        (nms_bi_wm.opersuma IS NULL) AND (nms_bi_wm.GIDLp <> 0) AND (nms_bi_wm_1.GIDLp = 0) AND (NMS_TrnElem.E_Cecha <> '') AND (NMS_TrnElem.E_OperSuma IS NOT NULL)
END
--Przepisanie operatorów z nagłówka jeśli nie można przepisać z elementu
BEGIN 
UPDATE       nms_bi_wm
SET oper = nms_bi_wm_1.oper, oper1 = nms_bi_wm_1.oper1, oper2 = nms_bi_wm_1.oper2, opersuma = nms_bi_wm_1.opersuma, data =
                             (SELECT GETDATE() ), OperNag = 1
FROM            nms_bi_wm INNER JOIN
                         nms_bi_wm AS nms_bi_wm_1 ON nms_bi_wm.GIDNumer = nms_bi_wm_1.GIDNumer
WHERE        (nms_bi_wm.data IS NOT NULL) AND (nms_bi_wm.opersuma IS NULL) AND (nms_bi_wm.GIDLp <> 0) AND (nms_bi_wm_1.GIDLp = 0)
END
--Backup danych
begin
delete from dbo.nms_bi_wm_backup
end
begin
insert into dbo.nms_bi_wm_backup
select * from dbo.nms_bi_wm
end
--Poprawa jeśli na pozycji jest podana suma inna niż liczba operatorów - z nagłówka
begin
UPDATE    nms_bi_wm
SET              oper = nag.oper, oper1 = nag.oper1, oper2 = nag.oper2, opersuma = nag.opersuma, data =
                          (SELECT     GETDATE() AS Expr1), OperNag = 1
FROM         nms_bi_wm INNER JOIN
                      nms_bi_wm AS nag ON nms_bi_wm.GIDNumer = nag.GIDNumer
WHERE     (nms_bi_wm.opersuma = 3) AND (nms_bi_wm.oper2 IS NULL) OR
                      (nms_bi_wm.opersuma = 2) AND (nms_bi_wm.oper2 IS NULL) AND (nms_bi_wm.oper1 IS NULL) AND (nag.GIDLp = 0)
end 
END

