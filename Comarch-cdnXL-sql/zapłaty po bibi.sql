USE [CDNXL_HANDEL]
GO
/****** Object:  StoredProcedure [dbo].[zaplaty]    Script Date: 11/24/2016 07:55:32 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
ALTER PROCEDURE [dbo].[zaplaty]
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

       
        SELECT
       R2_KwotaSys as Rozliczenie,
       (CASE WHEN R2_DataRozrachunku > 0
          THEN CONVERT(date, DATEADD(day, R2_DataRozrachunku, CONVERT(DATE, '1800-12-28', 121)), 121)
          ELSE CONVERT(date, DATEADD(day, R2_DataRozliczenia, CONVERT(DATE, '1800-12-28', 121)), 121) END
       ) AS RozliczenieOstatniaData,
       TRZ_ZalNumer as FSLNumer,
       FSLWartoscBrutto,
       R2_Dok1Typ as Dok1Typ,
       R2_Dok2Typ as Dok2Typ,
       R2_Dok1Numer as Dok1,
       R2_Dok2Numer as Dok2,
       TRZ_KonNumer as PrzezZaliczke
       into #tmp
       FROM CDN.Rozliczenia 
       LEFT JOIN (
          SELECT 
          TRZ_ZalNumer, 
          TRZ_ZalTyp,   
          TRZ_KwotaRozliczona, 
          (TrN_NettoR+TrN_VatR) as FSLWartoscBrutto,
          TRZ_KonNumer
          FROM CDN.TraRozliczZal
          INNER JOIN CDN.TraNag ON TraRozliczZal.TRZ_ZalNumer = CDN.TraNag.TrN_GIDNumer
          WHERE TRZ_ZalTyp IN(1312,1824,1828,1836)
       ) as Zaliczkowe ON Zaliczkowe.TRZ_ZalNumer = R2_Dok1Numer AND Zaliczkowe.TRZ_ZalTyp = R2_Dok1Typ OR Zaliczkowe.TRZ_ZalNumer = R2_Dok2Numer AND Zaliczkowe.TRZ_ZalTyp = R2_Dok2Typ
    --   WHERE R2_Dok1Numer = 56773 OR R2_Dok2Numer = 56773 -- OR TRZ_KonNumer = 402916 --tu mozna podstawic sobie gidnumer faktury, albo zaliczki odczytany z pierwszego polecenia w polu DokRozlID

--select * from #tmp
 
 -- początek 
 SELECT FV, FVNetto, FVBrutto, FVDataWystawienia, FVid, Rozliczenie, RozliczenieOstatniaData, operator
 FROM(
       SELECT
       CDN.nazwaobiektu(TrN_GIDTyp, TrN_GIDNumer, 0, 2) as FV,
       TrN_GIDNumer as FVid,
       TrN_GIDTyp as FVtyp,
       TrN_NettoR as FVNetto,
       (TrN_NettoR+TrN_VatR) as FVBrutto,
       CONVERT(date, DATEADD(day, TrN_Data2, CONVERT(DATE, '1800-12-28', 121)), 121) as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp  
       ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]
       FROM CDN.TraNag
       WHERE TrN_Data2 > 76343 AND TrN_GIDTyp IN(2033,2037)
    UNION ALL
       --dokumenty spinacze do faktur
       SELECT
       CDN.nazwaobiektu(TrN_SpiTyp, TrN_SpiNumer, 0, 2) as FV,
       TrN_SpiNumer,
       TrN_SpiTyp,
       Null as FVNetto,
       Null as FVBrutto,
       Null as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp      
       ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]
       FROM CDN.TraNag
       WHERE TrN_SpiNumer > 0 AND TrN_SpiNumer <> TrN_GIDNumer AND TrN_SpiTyp IN(2033,2037)
    UNION ALL
       --dokumenty zwrotu - korekty. z tego nie korzystam, FSK odliczamy w kolejnych okresach premiowania
       SELECT
       CDN.nazwaobiektu(TrN_ZwrTyp, TrN_ZwrNumer, 0, 2) as FV,
       TrN_ZwrNumer,
       TrN_ZwrTyp,
       Null as FVNetto,
       Null as FVBrutto,
       Null as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp
       ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]      
       FROM CDN.TraNag
       WHERE TrN_ZwrNumer > 0 AND TrN_ZwrNumer <> TrN_GIDNumer AND TrN_ZwrTyp IN(2033,2037)
 ) as tabelka 
 join #tmp on FVid=dok1
 --order by FVDataWystawienia
  union all
    SELECT FV, FVNetto, FVBrutto, FVDataWystawienia, FVid, Rozliczenie, RozliczenieOstatniaData, operator
 FROM(
       SELECT
       CDN.nazwaobiektu(TrN_GIDTyp, TrN_GIDNumer, 0, 2) as FV,
       TrN_GIDNumer as FVid,
       TrN_GIDTyp as FVtyp,
       TrN_NettoR as FVNetto,
       (TrN_NettoR+TrN_VatR) as FVBrutto,
       CONVERT(date, DATEADD(day, TrN_Data2, CONVERT(DATE, '1800-12-28', 121)), 121) as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp   
      ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]
       FROM CDN.TraNag
       WHERE TrN_Data2 > 76343 AND TrN_GIDTyp IN(2033,2037)
    UNION ALL
       --dokumenty spinacze do faktur
       SELECT
       CDN.nazwaobiektu(TrN_SpiTyp, TrN_SpiNumer, 0, 2) as FV,
       TrN_SpiNumer,
       TrN_SpiTyp,
       Null as FVNetto,
       Null as FVBrutto,
       Null as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp      
       ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]
       FROM CDN.TraNag
       WHERE TrN_SpiNumer > 0 AND TrN_SpiNumer <> TrN_GIDNumer AND TrN_SpiTyp IN(2033,2037)
    UNION ALL
       --dokumenty zwrotu - korekty. z tego nie korzystam, FSK odliczamy w kolejnych okresach premiowania
       SELECT
       CDN.nazwaobiektu(TrN_ZwrTyp, TrN_ZwrNumer, 0, 2) as FV,
       TrN_ZwrNumer,
       TrN_ZwrTyp,
       Null as FVNetto,
       Null as FVBrutto,
       Null as FVDataWystawienia,
       TrN_GIDNumer as DokRozlID,
       TrN_GIDTyp as DokRozlTyp      
       ,(select top 1 KARTY.Ope_ident from CDN.OpeKarty KARTY  where KARTY.Ope_GIDNumer=TrN_OpeNumerW) [operator]
       FROM CDN.TraNag
       WHERE TrN_ZwrNumer > 0 AND TrN_ZwrNumer <> TrN_GIDNumer AND TrN_ZwrTyp IN(2033,2037)
 ) as tabelka 
 join #tmp on FVid=dok2
 order by FVDataWystawienia
END

