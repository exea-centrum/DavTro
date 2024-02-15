DECLARE @SPRKOSZTR NVARCHAR(MAX);
SET @SPRKOSZTR = 'Tak';
DECLARE @SPRILOSCJPOM NVARCHAR(MAX);
SET @SPRILOSCJPOM = 'Tak';
DECLARE @SPRMARZA NVARCHAR(MAX);
SET @SPRMARZA = 'Tak';
DECLARE @SPRILOSC NVARCHAR(MAX);
SET @SPRILOSC = 'Tak';
DECLARE @SPRKOSZTZ NVARCHAR(MAX);
SET @SPRKOSZTZ = 'Tak';
DECLARE @SPRWARTWAL NVARCHAR(MAX);
SET @SPRWARTWAL = 'Tak';
DECLARE @SPRWARTBR NVARCHAR(MAX);
SET @SPRWARTBR = 'Tak';
DECLARE @SPRWART NVARCHAR(MAX);
SET @SPRWART = 'Tak';
DECLARE @DOKSPISERIA NVARCHAR(MAX);
SET @DOKSPISERIA = 'Tak';
DECLARE @DOKSPISTATUS NVARCHAR(MAX);
SET @DOKSPISTATUS = 'Tak';
DECLARE @DOKSPIWALUTA NVARCHAR(MAX);
SET @DOKSPIWALUTA = 'Tak';
DECLARE @DOKSPITYP NVARCHAR(MAX);
SET @DOKSPITYP = 'Tak';
DECLARE @DOKSPINUMER NVARCHAR(MAX);
SET @DOKSPINUMER = 'Tak';
DECLARE @CZYSPIDOK NVARCHAR(MAX);
SET @CZYSPIDOK = 'Tak';
DECLARE @DOKWALUTA NVARCHAR(MAX);
SET @DOKWALUTA = 'Tak';
DECLARE @DOKSERIA NVARCHAR(MAX);
SET @DOKSERIA = 'Tak';
DECLARE @DOKJEDNPOM NVARCHAR(MAX);
SET @DOKJEDNPOM = 'Tak';
DECLARE @DOKSTATUS NVARCHAR(MAX);
SET @DOKSTATUS = 'Tak';
DECLARE @DOKCONTROLLING NVARCHAR(MAX);
SET @DOKCONTROLLING = 'Tak';
DECLARE @DOKNUMER NVARCHAR(MAX);
SET @DOKNUMER = 'Tak';
DECLARE @DOKTYP NVARCHAR(MAX);
SET @DOKTYP = 'Tak';
DECLARE @CZYDOK NVARCHAR(MAX);
SET @CZYDOK = 'Tak';
DECLARE @CZYTWRGR NVARCHAR(MAX);
SET @CZYTWRGR = 'Tak';
DECLARE @TWRJEDNPOD NVARCHAR(MAX);
SET @TWRJEDNPOD = 'Tak';
DECLARE @TWRNAZWA NVARCHAR(MAX);
SET @TWRNAZWA = 'Tak';
DECLARE @TWRKOD NVARCHAR(MAX);
SET @TWRKOD = 'Tak';
DECLARE @CZYTWR NVARCHAR(MAX);
SET @CZYTWR = 'Tak';
DECLARE @MAGNAZWA NVARCHAR(MAX);
SET @MAGNAZWA = 'Tak';
DECLARE @MAGKOD NVARCHAR(MAX);
SET @MAGKOD = 'Tak';
DECLARE @CZYMAG NVARCHAR(MAX);
SET @CZYMAG = 'Tak';
DECLARE @CZYDATASPRZ NVARCHAR(MAX);
SET @CZYDATASPRZ = 'Tak';
DECLARE @CZYDATAWYST NVARCHAR(MAX);
SET @CZYDATAWYST = 'Tak';
DECLARE @CZYDATAPLAT NVARCHAR(MAX);
SET @CZYDATAPLAT = 'Tak';
DECLARE @CZYDATAANAL NVARCHAR(MAX);
SET @CZYDATAANAL = 'Tak';
DECLARE @KNPGEOGRAFIA NVARCHAR(MAX);
SET @KNPGEOGRAFIA = 'Tak';
DECLARE @KNPAKRONIM NVARCHAR(MAX);
SET @KNPAKRONIM = 'Tak';
DECLARE @KNPNAZWA NVARCHAR(MAX);
SET @KNPNAZWA = 'Tak';
DECLARE @CZYKNP NVARCHAR(MAX);
SET @CZYKNP = 'Tak';
DECLARE @KNDGEOGRAFIA NVARCHAR(MAX);
SET @KNDGEOGRAFIA = 'Tak';
DECLARE @KNDAKRONIM NVARCHAR(MAX);
SET @KNDAKRONIM = 'Tak';
DECLARE @KNDNAZWA NVARCHAR(MAX);
SET @KNDNAZWA = 'Tak';
DECLARE @CZYKND NVARCHAR(MAX);
SET @CZYKND = 'Tak';
DECLARE @CZYKNTGR NVARCHAR(MAX);
SET @CZYKNTGR = 'Tak';
DECLARE @CZYREGGR NVARCHAR(MAX);
SET @CZYREGGR = 'Tak';
DECLARE @KNTGEOGRAFIA NVARCHAR(MAX);
SET @KNTGEOGRAFIA = 'Tak';
DECLARE @KNTREGION NVARCHAR(MAX);
SET @KNTREGION = 'Tak';
DECLARE @KNTRODZAJ NVARCHAR(MAX);
SET @KNTRODZAJ = 'Tak';
DECLARE @KNTOPIEKUN NVARCHAR(MAX);
SET @KNTOPIEKUN = 'Tak';
DECLARE @KNTAKRONIM NVARCHAR(MAX);
SET @KNTAKRONIM = 'Tak';
DECLARE @KNTNAZWA NVARCHAR(MAX);
SET @KNTNAZWA = 'Tak';
DECLARE @CZYKNT NVARCHAR(MAX);
SET @CZYKNT = 'Tak';
DECLARE @PUSTY NVARCHAR(MAX);
SET @PUSTY = '--------------------------------------';
DECLARE @DATADO INT;
SET @DATADO = 78826;
DECLARE @DATAOD INT;
SET @DATAOD = 78531;
SET LANGUAGE Polish

IF OBJECT_ID(N'tempdb..#tmp_Regions',N'U') IS NOT NULL
DROP TABLE #tmp_Regions

IF OBJECT_ID(N'tempdb..#tmpKntGr',N'U') IS NOT NULL
DROP TABLE #tmpKntGr

IF OBJECT_ID(N'tempdb..#tmpTwrGr',N'U') IS NOT NULL
DROP TABLE #tmpTwrGr

------------------------------
--      DANE				--
------------------------------
DECLARE @function varchar(max)

SET @function = ''
SET @function = @function + N'
CREATE FUNCTION [dbo].[NumerDokumentuFormatBI](
@Obszar           INT,
@p_GidTyp   VARCHAR(20),
@p_SpiTyp   VARCHAR(20),
@p_TrnTyp   VARCHAR(20),
@p_Numer    VARCHAR(20),
@p_Rok      VARCHAR(20),
@p_Seria    VARCHAR(20),
@p_Miesiac  VARCHAR(20),
@p_TypSkrot VARCHAR(20)
)
RETURNS VARCHAR(max)  AS
BEGIN
DECLARE @formatDok VARCHAR(max)
DECLARE @gidTyp INT
DECLARE @Format         VARCHAR(30)
DECLARE @I              INT
DECLARE @Imax           INT
DECLARE @Poprzedni     VARCHAR(50)
DECLARE @formatOgolny VARCHAR(50)
DECLARE @sQl	varchar(max)

SET @formatDok = '' ''
SET @SQL = '' ''
-- @Obszar = 1 - P3atnooci
-- @Obszar = 2 - ...

DECLARE Dokumenty CURSOR FOR
SELECT Ob_GidTyp FROM CDN.Obiekty WHERE 
( @Obszar = 1 AND Ob_GidTyp in (784,4145,7691 ) )
OR
( @Obszar = 3 AND Ob_GidTyp in (434,2768,2832,4144,7680,7681,7684,7690,784) )

OPEN Dokumenty;
FETCH NEXT FROM Dokumenty INTO @gidTyp

IF @gidTyp IS NOT NULL SET @formatDok = ''CASE ''

WHILE @@FETCH_STATUS = 0
BEGIN

SET @formatDok = @formatDok + ''WHEN ''+@p_GidTyp+'' = '' + CAST(@gidTyp as varchar) + '' THEN ''

IF @gidTyp = 7691
  SELECT @formatDok = @formatDok + ''( SELECT DPN_Symbol'' + ''+'' + ''''''/'''''' + ''right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) + ''''/'''' + cast(''+@p_rok+'' as varchar) + ''''/'''' + cast(''+@p_numer+'' as varchar)
  FROM CDN.DefPodNag WHERE DPN_ID = ''+@p_SpiTyp+'')
  ''
ELSE IF @gidTyp = 2768
  SET @formatDok = @formatDok +''''''VAT-7 '''''' + ''+'' + ''right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) + ''''/'''' + cast(''+@p_rok+'' as varchar)
  ''
ELSE IF @gidTyp = 7712
  SET @formatDok = @formatDok +''''''VAT-7D '''''' + ''+'' + ''case ''+@p_miesiac+'' when 1 then ''''I/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 2 then ''''II/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 3 then ''''III/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 4 then ''''IV/'''' + cast(''+@p_rok+'' as varchar) end
                                                                                        ''
ELSE IF @gidTyp = 7696
 SET @formatDok = @formatDok +''''''VAT-7K '''''' + ''+'' + ''case ''+@p_miesiac+'' when 1 then ''''I/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 2 then ''''II/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 3 then ''''III/'''' + cast(''+@p_rok+'' as varchar)
                                                                                        when 4 then ''''IV/'''' + cast(''+@p_rok+'' as varchar) end
                                                                                        ''
ELSE IF @gidTyp = 6400 OR @gidTyp = 6401
  SET @formatDok = @formatDok +''''''DRA '''''' + ''+'' + ''right(''''0''''+ ''+@p_seria+'',2) + ''''/'''' + right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) + ''''/'''' + cast(''+@p_rok+'' as varchar)
  ''
ELSE IF @gidTyp = 6272
  SET @formatDok = @formatDok +''''''PIT-'''''' + ''+'' + ''CASE ''+@p_TrnTyp+'' WHEN 3 THEN ''''4'''' WHEN 6 THEN ''''8A'''' ELSE '''''''' END + '''' '''' + right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) + ''''/'''' + cast(''+@p_rok+'' as varchar)
  ''
ELSE IF @gidTyp = 2832
  SET @formatDok = @formatDok + ''''''NO-'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + rtrim(''+@p_seria+'')  + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_numer+'' as varchar)
  ''
ELSE IF @gidTyp = 2833
  SET @formatDok = @formatDok +''''''UP-'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + rtrim(''+@p_seria+'')  + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_numer+'' as varchar)
  ''
ELSE
  BEGIN
  SELECT @formatDok = @formatDok + '''''''' + OB_Skrot + '''''''' FROM CDN.Obiekty WHERE OB_GIDTyp = @gidTyp;
  IF @gidTyp IN (2048,2064,2080,2096,2112,2128,2144,2160,2176,2192,2224,2288)
        SET @formatDok = @formatDok + ''+'' + '''''' '''''' + ''+'' + ''REPLACE(SPACE(5-LEN(cast(''+@p_Numer+'' as Varchar))) + cast(''+@p_Numer+'' as Varchar),'''' '''',''''0'''') +''''/'''' + cast(''+@p_Rok+'' as Varchar) + case when ''+@p_Seria+''<>'''''''' then ''''/'''' + ''+@p_Seria+'' else '''''''' end
        ''
  ELSE IF @gidTyp IN (7680,7681,7682,7683)
        SET @formatDok = @formatDok + ''+'' + ''''''/'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) +''''/''''+ cast(''+@p_numer+'' as varchar) + case when ''+@p_spityp+'' <> 0 then ''''/''''+ cast(''+@p_spityp+'' as varchar) else '''''''' end + case when ''+@p_trntyp+'' <> 0 then ''''/''''+ cast(''+@p_trntyp+'' as varchar) else '''''''' end
        ''
  ELSE IF @gidTyp IN (7684,7690)
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),4) + ''''/''''+ rtrim(''+@p_seria+'') + ''''/'''' +  cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp = 2832
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + rtrim(''+@p_seria+'')  + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp = 4144
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''rtrim(''+@p_seria+'') + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_rok+'' as varchar) +''''/''''+ right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) +''''/''''+ cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp = 4145
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''rtrim(''+@p_seria+'') + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_rok+'' as varchar) +''''/''''+ right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) +''''/''''+ cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp = 4146
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''rtrim(''+@p_seria+'') + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + cast(''+@p_rok+'' as varchar) +''''/''''+ right(''''0''''+cast(''+@p_miesiac+'' as varchar),2) +''''/''''+ cast(''+@p_numer+'' as varchar)''
  ELSE IF @gidTyp = 784
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + rtrim(''+@p_seria+'') + ''''/''''+ cast(''+@p_numer+'' as varchar) + case when ''+@p_TrnTyp+''=1 then ''''/RBO'''' else '''''''' end + ''''/'''' + cast(''+@p_miesiac+'' as varchar)
        ''
  ELSE IF @gidTyp IN (2976,2977)
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''cast(''+@p_numer+'' as varchar) + '''' '''' + cast(''+@p_miesiac+'' as varchar) + ''''/'''' + cast(''+@p_rok+'' as varchar)
        ''
  ELSE IF @gidTyp = 434
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''cast(''+@p_rok+'' as varchar) + ''''/'''' + case when rtrim(''+@p_seria+'')<>'''''''' then rtrim(''+@p_seria+'') + ''''/'''' else '''''''' end + cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp = 435
        SET @formatDok = @formatDok + ''+'' + ''+'' + ''''''-'''''' + ''+'' + ''cast(''+@p_numer+'' as varchar) + ''''/'''' + RIGHT(cast(''+@p_Rok+'' as Varchar),2) + case when rtrim(''+@p_seria+'')<>'''''''' then ''''/'''' + rtrim(''+@p_seria+'') else '''''''' end
        ''
  ELSE IF @gidTyp = 800
        SET @formatDok = @formatDok +''''''RKB'''''' + ''+'' + ''right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + case when rtrim(''+@p_seria+'')<>'''''''' then rtrim(''+@p_seria+'') + ''''/'''' else '''''''' end + cast(''+@p_numer+'' as varchar)
        ''
  ELSE IF @gidTyp in (2978,2979,2980,2981)
        SET @formatDok = @formatDok + ''+'' + ''''''-'''''' + ''+'' + ''cast(''+@p_numer+'' as varchar) + ''''/'''' + right(cast(''+@p_rok+'' as varchar),2) + ''''/'''' + rtrim(''+@p_seria+'') + ''''/'''' + case when ''+@p_seria+''='''''''' then '''''''' else ''''/'''' end + right(''''0''''+cast(''+@p_miesiac+'' as varchar),2)
        ''
  END

FETCH NEXT FROM Dokumenty INTO @gidTyp
END

CLOSE Dokumenty
DEALLOCATE Dokumenty


IF @gidTyp IS NOT NULL SET @formatDok = @formatDok + '' ELSE ''

IF @formatDok <> '''' SET @formatDok = @formatDok + '' ''
          
              SET @formatDok = @formatDok + ''CASE
                WHEN ''+@p_SpiTyp+''=0 AND ''+@p_GidTyp+'' IN (2033,2041,2036,2044,2037,2045,1520,1521,1528,1529) THEN ''''(S)''''
                WHEN ''+@p_TrnTyp+'' IN (12,13) THEN ''''(A)'''' ELSE '''''''' END + ''+@p_TypSkrot+'' + ''''-'''' ''
          
          SELECT @Format=Kon_wartosc, @I=1, @Imax=len(kon_wartosc) FROM cdn.konfig WHERE Kon_Numer=992

          WHILE @I<=@Imax
          BEGIN
                SET @Poprzedni = @formatDok
                SET @formatDok = @formatDok + ''+ '' + CASE SUBSTRING(@Format,@I,1)
                        WHEN ''1'' THEN ''cast(''+@p_Numer+'' as Varchar) ''
                        WHEN ''2'' THEN ''REPLACE(SPACE(8-LEN(cast(''+@p_Numer+'' as Varchar))) + cast(''+@p_Numer+'' as Varchar),'''' '''',''''0'''') ''
                        WHEN ''3'' THEN ''RIGHT(cast(''+@p_Rok+'' as Varchar),2) ''
                        WHEN ''4'' THEN ''cast(''+@p_Rok+'' as Varchar) ''
                        WHEN ''5'' THEN ''RTRIM(''+@p_Seria+'') ''
                        WHEN ''6'' THEN ''CASE WHEN ''+@p_Miesiac+'' = 0 THEN '''''''' ELSE cast(''+@p_miesiac+'' as Varchar) END ''
                        WHEN ''7'' THEN ''CASE WHEN ''+@p_Miesiac+'' = 0 THEN '''''''' WHEN ''+@p_Miesiac+''>= 10 THEN cast(''+@p_Miesiac+'' as Varchar) ELSE ''''0''''+cast(''+@p_Miesiac+'' as Varchar) END ''
                END
                IF (@Poprzedni<>@formatDok AND @I+2 <= @Imax) SET @formatDok=@formatDok+ ''+'' + '''''''' + SUBSTRING(@Format,@I+1,1) + '''''''' + '' ''
                SET @I = @I+2
          END

IF @gidTyp IS NOT NULL  SET @formatDok = @formatDok + '' END''

RETURN @formatDok
END
'

IF OBJECT_ID('[dbo].[NumerDokumentuFormatBI]', 'FN') IS NULL
   BEGIN
      EXEC (@function)
   END
------------------------------


DECLARE @n CHAR
DECLARE @poziom int
DECLARE @poziom_max int		
DECLARE @sql varchar(max)
DECLARE @select varchar(max)
DECLARE @select1 varchar(max)
DECLARE @select2 varchar(max)
DECLARE @kolumnyRejony nvarchar(max)
DECLARE @kolumnyKntGrupy nvarchar(max)
DECLARE @kolumnyTwr varchar(max)
DECLARE @i int

SET @select = ''
SET @select1 = ''
SET @select2 = ''
SET @n = char(10)


------------------------------
--      PARAMETRY			--
------------------------------
------------------------------
IF (@czyKnt = 'Nie')
BEGIN
	SET @KntNazwa		= @czyKnt
	SET @KntAkronim		= @czyKnt
	SET @KntOpiekun		= @czyKnt
	SET @KntRodzaj		= @czyKnt
	SET @KntGeografia	= @czyKnt
	SET @kntregion		= @czyKnt
	SET @czyKntGr       = @czyKnt
	SET @czyRegGr       = @czyKnt
END
IF (@czyKnd = 'Nie')
BEGIN
	SET @KndNazwa		= @czyKnd
	SET @KndAkronim		= @czyKnd
	SET @KndGeografia	= @czyKnd
END
IF (@czyKnp = 'Nie')
BEGIN
	SET @KnpNazwa		= @czyKnp
	SET @KnpAkronim		= @czyKnp
	SET @KnpGeografia	= @czyKnp
END
IF (@czyTwr = 'Nie')
BEGIN
	SET @TwrKod		= @czyTwr
	SET @TwrNazwa	= @czyTwr
	SET @TwrJednPod	= @czyTwr
	SET @czyTwrGr   = @czyTwr
END
IF (@czyMag = 'Nie')
BEGIN
	SET @MagKod		= @czyMag
	SET @MagNazwa	= @czyMag
END
IF (@czyDok = 'Nie')
BEGIN
	SET @DokTyp		= @czyDok
	SET @DokNumer	= @czyDok
	SET @DokWaluta  = @czyDok
	SET @DokSeria	= @czyDok
	SET @DokJednPom	= @czyDok
	SET @DokControlling = @czyDok
	SET @DokStatus = @czyDok
END
IF (@czySpiDok = 'Nie')
BEGIN
	SET @DokSpiTyp		= @czySpiDok
	SET @DokSpiNumer	= @czySpiDok
	SET @DokSpiSeria	= @czySpiDok
	SET @DokSpiStatus	= @czySpiDok
	SET @DokSpiWaluta	= @czySpiDok
END
IF (@KntNazwa = 'Nie' and @KntAkronim = 'Nie' and @KntOpiekun = 'Nie' and @KntRodzaj = 'Nie' and @KntGeografia = 'Nie' and @czyKntGr = 'Nie' and @czyRegGr = 'Nie' and @KntRegion = 'Nie') SET @czyKnt = 'Nie' ELSE SET @czyKnt = 'Tak'
IF (@KndNazwa = 'Nie' and @KndAkronim = 'Nie' and @KndGeografia = 'Nie') SET @czyKnd = 'Nie' ELSE SET @czyKnd = 'Tak'
IF (@KnpNazwa = 'Nie' and @KnpAkronim = 'Nie' and @KnpGeografia = 'Nie') SET @czyKnp = 'Nie' ELSE SET @czyKnp = 'Tak'
IF (@TwrKod = 'Nie' and @TwrNazwa = 'Nie' and @TwrJednPod = 'Nie') SET @czyTwr = 'Nie' ELSE SET @czyTwr = 'Tak'
IF (@MagKod = 'Nie' and @MagNazwa = 'Nie') SET @czyMag = 'Nie' ELSE SET @czyMag = 'Tak'
IF (@DokTyp = 'Nie' and @DokNumer = 'Nie' and @DokWaluta = 'Nie' and @DokSeria = 'Nie' and @DokJednPom	= 'Nie' and @DokControlling = 'Nie' and @DokStatus = 'Nie') SET @czyDok = 'Nie' ELSE SET @czyDok = 'Tak'
IF (@DokSpiTyp = 'Nie' and @DokSpiNumer = 'Nie' and @DokSpiSeria = 'Nie' and @DokSpiStatus = 'Nie' and @DokSpiWaluta = 'Nie') SET @czySpiDok = 'Nie' ELSE SET @czySpiDok = 'Tak'

------------------------------
--      REJONY_GRUPY		--
------------------------------
IF (@czyRegGr = 'Tak' and @czyKnt = 'Tak')
BEGIN
;with R (REJON_OrgId, REJON_ParOrgId, REJON_Nazwa, REJON_Poziom) as 
(	SELECT
	REJ.Rej_Id						AS REJON_OrgId,
	REJ.Rej_OjciecId				AS REJON_ParOrgId,
	CONVERT(nvarchar,REJ.Rej_Nazwa)	AS REJON_Nazwa,
	0								AS REJON_Poziom
	FROM cdn.Rejony REJ WHERE REJ_OjciecId=0
	
	UNION ALL
	SELECT
	childREJ.Rej_Id						 AS REJON_OrgId,
	childREJ.Rej_OjciecId				 AS REJON_ParOrgId,
	CONVERT(nvarchar,childREJ.Rej_Nazwa) AS REJON_Nazwa,
	R.REJON_Poziom+1					 AS REJON_Poziom
    from cdn.Rejony childREJ
    INNER JOIN R ON childREJ.Rej_ojciecid = R.REJON_OrgId
) 
SELECT * INTO #tmp_Regions FROM R order by REJON_OrgId


CREATE UNIQUE CLUSTERED INDEX UIX_1 on #tmp_Regions (REJON_OrgId)

SELECT @poziom_max = MAX(REJON_Poziom) FROM #tmp_Regions
SET @poziom = @poziom_max
SET @sql = N''

WHILE @poziom >= 0  
BEGIN
	SET @sql = N'ALTER TABLE #tmp_Regions ADD Poziom' + CAST(@poziom AS nvarchar) + N' nvarchar(40), PoziomID' + CAST(@poziom AS nvarchar) + N' nvarchar(40)'
	
    EXEC(@sql)
	IF (@poziom = @poziom_max) 
		BEGIN
			SET @sql = N'UPDATE p
				SET PoziomID'+ CAST(@poziom AS nvarchar) + N' = CASE WHEN REJON_Poziom ='+ CAST(@poziom AS nvarchar) 
				+ N' THEN REJON_ParOrgID ELSE REJON_OrgId END
				FROM #tmp_Regions p'
			EXEC (@sql)	
			SET @sql = N'UPDATE p
				SET Poziom'+ CAST(@poziom AS nvarchar) + N' = p.REJON_Nazwa
				FROM #tmp_Regions p'
			EXEC (@sql)	
		END
	ELSE
		BEGIN
			SET @sql = N'UPDATE p
				SET PoziomID'+ CAST(@poziom AS nvarchar) + N' = CASE WHEN c.REJON_Poziom ='+ CAST(@poziom AS nvarchar) 
				+ N' THEN c.REJON_ParOrgID ELSE c.REJON_OrgId END
				FROM #tmp_Regions p
				LEFT OUTER JOIN #tmp_Regions c ON c.REJON_OrgID = p.PoziomID'+ CAST(@poziom+1 AS nvarchar)
			EXEC (@sql)	
			SET @sql = N'UPDATE p
						SET Poziom'+ CAST(@poziom AS nvarchar) + N' = c.REJON_Nazwa
						FROM #tmp_Regions p
						LEFT OUTER JOIN #tmp_Regions c ON c.REJON_OrgID = p.PoziomID'+ CAST(@poziom+1 AS nvarchar)
			EXEC (@sql)	
		END

    SET @poziom = @poziom - 1
END     

set @kolumnyRejony = ''
set @i=0
while (@i<=@poziom_max)
begin
	set @kolumnyRejony = @kolumnyRejony + ',[Rejon - Grupa Poziom ' + LTRIM(@i) + '] = CASE WHEN Rej.Poziom' +LTRIM(@i) + ' IS NULL THEN ''<nieznany>'' ELSE Rej.Poziom' + LTRIM(@i) + ' END'
	set @i = @i + 1
end;
END
------------------------------
--      KNT_GRUPY			--
------------------------------
IF (@czyKntGr = 'Tak' and @czyKnt = 'Tak')
BEGIN
;WITH K (GidTyp, ID, GrTyp, GrNazwa, ParID, Poziom) 
AS
(
	SELECT KGD_GidTyp, KGD_GIDNumer, KGD_GrOTyp, KGD_Kod, KGD_Gronumer , 0 as poziom
	From cdn.kntgrupydom 
	where KGD_Gronumer = 0
	
	union all
	
	SELECT KGD_GidTyp, KGD_GIDNumer, KGD_GrOTyp, KGD_Kod, KGD_Gronumer , p.poziom +1 as poziom
	From K p
	JOIN cdn.kntgrupydom c ON c.KGD_GrONumer=p.ID and p.GidTyp = -32
	where c.KGD_Gronumer <> 0
	
)
SELECT * INTO #tmpKntGr FROM K
CREATE UNIQUE CLUSTERED INDEX UIX_2 on #tmpKntGr (GidTyp, ID)


SELECT @poziom_max = MAX(poziom) FROM #tmpKntGr
SET @poziom = @poziom_max
SET @sql = N''

WHILE @poziom >= 0  
BEGIN
	SET @sql = N'ALTER TABLE #tmpKntGr ADD Poziom' + CAST(@poziom AS nvarchar) + N' nvarchar(40), PoziomID' + CAST(@poziom AS nvarchar) + N' nvarchar(40)'
	
	EXEC(@sql)
    
    IF @poziom = @poziom_max 
		BEGIN
			SET @sql = N'UPDATE #tmpKntGr
				SET PoziomID' + CAST(@poziom AS nvarchar) +  '= ParID '
			EXEC(@sql)
			
			SET @sql = N'UPDATE #tmpKntGr
				SET Poziom' + CAST(@poziom AS nvarchar) + ' = GrNazwa'
			EXEC(@sql)
		END
    ELSE
		BEGIN 
    		SET @sql = N'UPDATE c
				SET c.Poziom' + CAST(@poziom AS nvarchar) + N' = (
					CASE WHEN c.poziom <=' + CAST(@poziom AS nvarchar) + N' THEN CAST(c.GrNazwa AS nvarchar)
					ELSE CAST(p.GrNazwa AS nvarchar) END)  
				FROM #tmpKntGr c
				LEFT JOIN #tmpKntGr p
				ON c.PoziomID' + CAST(@poziom + 1 AS nvarchar) + '= p.ID '
			EXEC(@sql)
	
			SET @sql = N'UPDATE c
				SET c.PoziomID' + CAST(@poziom AS nvarchar) + N' = (
					CASE WHEN c.poziom <=' + CAST(@poziom AS nvarchar) + N' THEN CAST(c.ParID AS nvarchar)
					ELSE CAST(p.ParID AS nvarchar) END)  
				FROM #tmpKntGr c
				LEFT JOIN #tmpKntGr p
				ON c.PoziomID' + CAST(@poziom + 1 AS nvarchar) + '= p.ID '
				EXEC(@sql)
		END
    SET @poziom = @poziom - 1
	
END

set @kolumnyKntGrupy = ''
set @i=0
while (@i<=@poziom_max)
begin
	set @kolumnyKntGrupy = @kolumnyKntGrupy + ',[Kontrahent - Grupa Poziom ' + LTRIM(@i) + '] = CASE WHEN KNTG.Poziom' +LTRIM(@i) + ' IS NULL THEN ''<nieznany>'' ELSE KNTG.Poziom' + LTRIM(@i) + ' END'
	set @i = @i + 1
end 
END
------------------------------
--      TWR_GRUPY			--
------------------------------
IF (@czyTwrGr = 'Tak' and @czyTwr = 'Tak')
BEGIN
;WITH T (GidTyp, ID, GrTyp, GrNazwa, ParID, Poziom) 
AS
(
	SELECT TGD_GIDTyp, TGD_GIDNumer, TGD_GrOTyp, TGD_Kod, TGD_Gronumer , 0 as poziom
	From cdn.twrgrupydom 
	where TGD_GrONumer = 0
	
	union all
	
	SELECT TGD_GidTyp, TGD_GIDNumer, TGD_GrOTyp, TGD_Kod, TGD_Gronumer , p.poziom +1 as poziom
	From T p
	JOIN cdn.TwrGrupyDom c ON c.TGD_GrONumer=p.ID and p.GidTyp = -16
	where c.TGD_Gronumer <> 0
	
)
SELECT * INTO #tmpTwrGr FROM T
CREATE UNIQUE CLUSTERED INDEX UIX_2 on #tmpTwrGr (GidTyp, ID)

SELECT @poziom_max = MAX(poziom) FROM #tmpTwrGr
SET @poziom = @poziom_max
SET @sql = N''
SET @kolumnyTwr = ''
SET @i=0

WHILE @poziom >= 0  
BEGIN
	SET @sql = N'ALTER TABLE #tmpTwrGr ADD Poziom' + CAST(@poziom AS nvarchar) + N' nvarchar(40), PoziomID' + CAST(@poziom AS nvarchar) + N' nvarchar(40)'
	
	EXEC(@sql)
    
    IF @poziom = @poziom_max 
		BEGIN
			SET @sql = N'UPDATE #tmpTwrGr
				SET PoziomID' + CAST(@poziom AS nvarchar) +  '= ParID '
			EXEC(@sql)
			
			SET @sql = N'UPDATE #tmpTwrGr
				SET Poziom' + CAST(@poziom AS nvarchar) + ' = GrNazwa'
			EXEC(@sql)
		END
    ELSE
		BEGIN 
    		SET @sql = N'UPDATE c
				SET c.Poziom' + CAST(@poziom AS nvarchar) + N' = (
					CASE WHEN c.poziom <=' + CAST(@poziom AS nvarchar) + N' THEN CAST(c.GrNazwa AS nvarchar)
					ELSE CAST(p.GrNazwa AS nvarchar) END)  
				FROM #tmpTwrGr c
				LEFT JOIN #tmpTwrGr p
				ON c.PoziomID' + CAST(@poziom + 1 AS nvarchar) + '= p.ID and  p.GidTyp =-16' 
			EXEC(@sql)
	
			SET @sql = N'UPDATE c
				SET c.PoziomID' + CAST(@poziom AS nvarchar) + N' = (
					CASE WHEN c.poziom <=' + CAST(@poziom AS nvarchar) + N' THEN CAST(c.ParID AS nvarchar)
					ELSE CAST(p.ParID AS nvarchar) END)  
				FROM #tmpTwrGr c
				LEFT JOIN #tmpTwrGr p
				ON c.PoziomID' + CAST(@poziom + 1 AS nvarchar) + '= p.ID and p.GidTyp =-16'
				EXEC(@sql)
		END
    SET @poziom = @poziom - 1
	
END

set @kolumnyTwr = ''
set @i=0
while (@i<=@poziom_max)
begin
	set @kolumnyTwr = @kolumnyTwr + ',[Produkt - Grupa Poziom ' + LTRIM(@i) + '] = CASE WHEN TWRG.Poziom' +LTRIM(@i) + ' IS NULL THEN ''<nieznany>'' ELSE TWRG.Poziom' + LTRIM(@i) + ' END'
	set @i = @i + 1
end
END


----------------------------------
--		MAIN QUERY				--
----------------------------------
SET @select = N'SELECT ' + @n

-----------------------------------------  WYMIARY  --------------------------------------------------------------
IF (@czyDataAnal = 'Tak')			SET @select1 = @select1 + 
								  N',[Data Analityczna - Dzień] = CONVERT(NVARCHAR(10),DataAnalityczna, 20),
									[Data Analityczna - Miesiac] = (CASE WHEN month(DataAnalityczna) < 10 THEN ''0'' + CAST(month(DataAnalityczna) as varchar(3)) 
																	ELSE CAST(month(DataAnalityczna) as varchar(2)) END) +'' ''+ DATENAME(month,DataAnalityczna),
									[Data Analityczna - Kwartał] = DATENAME(quarter,DataAnalityczna),
									[Data Analityczna - Rok] = DATENAME(year,DataAnalityczna)' + @n
 
IF (@czyDataPlat = 'Tak')			SET @select1 = @select1 +
									N',[Data Płatności - Dzień]		= ISNULL(CONVERT(NVARCHAR(10), DataPlatnosci,20),''<nieznany>''),
									[Data Płatności - Miesiąc]		= ISNULL((CASE WHEN Month(DataPlatnosci) <10 THEN ''0'' + cast(Month(DataPlatnosci) as varchar(3)) 
																		ELSE CAST(Month(DataPlatnosci) as varchar(2)) END) + '' '' + DATENAME(month,DataPlatnosci),''<nieznany>''),
									[Data Płatności - Kwartał]		= ISNULL(DATENAME(quarter,DataPlatnosci),''<nieznany>''),
									[Data Płatności - Rok]			= ISNULL(DATENAME(year,DataPlatnosci),''<nieznany>'')' + @n

IF (@czyDataWyst = 'Tak')			SET @select1 = @select1 +
								  N',[Data Wystawienia - Dzień]		= CONVERT(NVARCHAR(10), DataWystawienia,20),
									[Data Wystawienia - Miesiąc]	= (CASE WHEN Month(DataWystawienia) <10 THEN ''0'' + cast(Month(DataWystawienia) as varchar(3)) 
																		ELSE cast(Month(DataWystawienia) as varchar(2)) END) + '' ''+ DATENAME(month,DataWystawienia),
									[Data Wystawienia - Kwartał]	= DATENAME(quarter,DataWystawienia),
									[Data Wystawienia - Rok]		= DATENAME(year,DataWystawienia)' + @n

IF (@czyDataSprz = 'Tak')			SET @select1 = @select1 +
								  N',[Data Sprzedaży - Dzień]			= CONVERT(NVARCHAR(10),DataSprzedazy,20),
									[Data Sprzedaży - Miesiąc]			= (CASE WHEN Month(DataSprzedazy) <10 THEN ''0'' + cast(Month(DataSprzedazy) as varchar(3)) 
																			ELSE cast(Month(DataSprzedazy) as varchar(2)) END) + '' ''+ DATENAME(month,DataSprzedazy),
									[Data Sprzedaży - Kwartał]			= DATENAME(quarter,DataSprzedazy),
									[Data Sprzedaży - Rok]				= DATENAME(year,DataSprzedazy)' + @n

BEGIN
	IF (@KntNazwa = 'Tak')		SET @select1 = @select1 + N',[Kontrahent - Nazwa] = ISNULL(KNT.Knt_Nazwa1,''<nieznany>'')' + @n
	IF (@KntAkronim = 'Tak')		SET @select1 = @select1 + N',[Kontrahent - Akronim] = ISNULL(KNT.Knt_Akronim,''<nieznany>''), [Kontrahent - Akronim __PROCID__] = isnull(knt.KNT_gidtyp,-1), [Kontrahent - Akronim __ORGID__] = isnull(KNT.KNT_gidnumer,-1)' + @n
	IF (@KntOpiekun = 'Tak')		SET @select1 = @select1 + N',[Kontrahent - Opiekun] = ISNULL(CASE WHEN len(PRC.PRC_Nazwisko) >1 THEN PRC.PRC_Imie1 + '' '' + PRC.PRC_Nazwisko ELSE NULL END,''<nieznany>''), [Kontrahent - Opiekun __PROCID__] = isnull(PRC.PRC_gidtyp,-1), [Kontrahent - Opiekun __ORGID__] = isnull(prc.prc_gidnumer,-1) ' + @n
	IF (@KntRodzaj = 'Tak')		SET @select1 = @select1 + N',[Kontrahent - Rodzaj] = ISNULL(SLWR.SLW_WartoscS,''<nieznany>'')' + @n
	IF (@KntGeografia = 'Tak')	SET @select1 = @select1 + 
								  N',[Kontrahent - Województwo] = ISNULL(CASE WHEN len(upper(KNT.Knt_Wojewodztwo)) > 1 THEN upper(KNT.Knt_Wojewodztwo) ELSE NULL END,''<nieznany>'')
									,[Kontrahent - Powiat] = ISNULL(CASE WHEN len(KNT.Knt_Powiat) > 1 THEN KNT.Knt_Powiat ELSE NULL END,''<nieznany>'')
									,[Kontrahent - Gmina] = ISNULL(CASE WHEN len(KNT.Knt_Gmina) > 1 THEN KNT.Knt_Gmina ELSE NULL END,''<nieznany>'')
									,[Kontrahent - Miasto] = ISNULL(CASE WHEN len(KNT.Knt_Miasto) > 1 THEN KNT.Knt_Miasto ELSE NULL END,''<nieznany>'')' + @n
END

IF (@CzyKnd = 'Tak') 
BEGIN
	IF (@KndNazwa = 'Tak')		SET @select1 = @select1 + N',[Kontrahent Docelowy - Nazwa] = ISNULL(KND.Knt_Nazwa1,''<nieznany>'')' + @n
	IF (@KndAkronim = 'Tak')		SET @select1 = @select1 + N',[Kontrahent Docelowy - Akronim] = ISNULL(KND.Knt_Akronim,''<nieznany>'')' + @n
	IF (@KndGeografia = 'Tak')	SET @select1 = @select1 + 
								  N',[Kontrahent Docelowy - Województwo] = ISNULL(CASE WHEN len(upper(KND.Knt_Wojewodztwo)) > 1 THEN upper(KND.Knt_Wojewodztwo) ELSE NULL END,''<nieznany>'')
									,[Kontrahent Docelowy - Powiat] = ISNULL(CASE WHEN len(KND.Knt_Powiat) > 1 THEN KND.Knt_Powiat ELSE NULL END,''<nieznany>'')
									,[Kontrahent Docelowy - Gmina] = ISNULL(CASE WHEN len(KND.Knt_Gmina) > 1 THEN KND.Knt_Gmina ELSE NULL END,''<nieznany>'')
									,[Kontrahent Docelowy - Miasto] = ISNULL(CASE WHEN len(KND.Knt_Miasto) > 1 THEN KND.Knt_Miasto ELSE NULL END,''<nieznany>'')' + @n
END

IF (@CzyKnp = 'Tak') 
BEGIN
	IF (@KnpNazwa = 'Tak')		SET @select1 = @select1 + N',[Kontrahent Płatnik - Nazwa] = ISNULL(KNP.Knt_Nazwa1,''<nieznany>'')' + @n
	IF (@KnpAkronim = 'Tak')		SET @select1 = @select1 + N',[Kontrahent Płatnik - Akronim] = ISNULL(KNP.Knt_Akronim,''<nieznany>'')' + @n
	IF (@KnpGeografia = 'Tak')	SET @select1 = @select1 + 
								   N',[Kontrahent Płatnik - Województwo] = ISNULL(CASE WHEN len(upper(KNP.Knt_Wojewodztwo)) > 1 THEN upper(KNP.Knt_Wojewodztwo) ELSE NULL END,''<nieznany>'')
									,[Kontrahent Płatnik - Powiat] = ISNULL(CASE WHEN len(KNP.Knt_Powiat) > 1 THEN KNP.Knt_Powiat ELSE NULL END,''<nieznany>'')
									,[Kontrahent Płatnik - Gmina] = ISNULL(CASE WHEN len(KNP.Knt_Gmina) > 1 THEN KNP.Knt_Gmina ELSE NULL END,''<nieznany>'')
									,[Kontrahent Płatnik - Miasto] = ISNULL(CASE WHEN len(KNP.Knt_Miasto) > 1 THEN KNP.Knt_Miasto ELSE NULL END,''<nieznany>'')' + @n
END

 
 IF (@DokWaluta = 'Tak')	SET @select1 = @select1 + N',[Dokument - Waluta] = ISNULL(TRN.TrN_Waluta,''<nieznany>'')' + @n
 IF (@DokTyp = 'Tak')		SET @select1 = @select1 + N',[Dokument - Typ] = ISNULL(OB.OB_Skrot,''<nieznany>'')' + @n
 IF (@DokSeria = 'Tak')	SET @select1 = @select1 + N',[Dokument - Seria] = ISNULL(CONVERT(varchar(10),CASE WHEN LEN(TRN.Trn_TrnSeria) = 0 THEN NULL ELSE TRN.Trn_TrnSeria END),''<nieznany>'')' + @n
IF (@DokNumer = 'Tak')	SET @select1 = @select1 + 
										N',[Dokument - Numer] = ' + [dbo].[NumerDokumentuFormatBI](0,'trn.TRN_GIDTYP','trn.TRN_SPITYP','TRN_TRNTYP','TRN_TRNNUMER',
																		'TRN_TRNROK','TRN_TRNSERIA','TRN_TRNMIESIAC', 'OB_Skrot') + ',[Dokument - Numer __PROCID__] = isnull(trn.trn_gidTYP,''-1''),
																		[Dokument - Numer __ORGID__] = isnull(trn.trn_gidnumer,-1)'+ @n
 IF (@DokSpiNumer = 'Tak')	SET @select1 = @select1 + N',[Dokument - Numer Spinacz] = ' + [dbo].[NumerDokumentuFormatBI](0,'spi_GIDTYP','spi_SPITYP','spi_TRNTYP','spi_TRNNUMER',
																		'spi_TRNROK','spi_TRNSERIA','spi_TRNMIESIAC', 'spi_Skrot') + @n
 
 IF (@DokSpiWaluta = 'Tak')	SET @select1 = @select1 + N',[Dokument - Waluta Spinacz] = ISNULL(spi_Waluta,''<nieznany>'')' + @n
 IF (@DokSpiSeria = 'Tak')	SET @select1 = @select1 + N',[Dokument - Seria Spinacz] = ISNULL(CONVERT(varchar(10),CASE WHEN LEN(spi_TrnSeria) = 0 THEN NULL ELSE spi_TrnSeria END),''<nieznany>'')' + @n
 IF (@DokSpiTyp = 'Tak')		SET @select1 = @select1 + N',[Dokument - Typ Spinacz] = ISNULL(spi_Skrot,''<nieznany>'')' + @n
 IF (@DokSpiStatus = 'Tak')	  SET @select1 = @select1 + N',[Dokument - Status Spinacz] =  CASE WHEN spi_trnlp<127 then ''Anulowany'' ELSE CASE WHEN spi_stan < 3 then ''W Buforze'' when spi_zaksiegowano = 1 then ''Zaksięgowane'' else ''Zatwierdzony'' end end' +@n 
										
 IF (@DokControlling = 'Tak') SET @select1 = @select1 + N',[Dokument - Controlling] =   CASE WHEN isnull(own_iloscelementow,0) = 0 or trn_stan<3 then ''Nieopisany'' else  ''Opisany'' END' +@n
 IF (@DokStatus = 'Tak')	  SET @select1 = @select1 + N',[Dokument - Status] =  CASE WHEN trn_trnlp<127 then ''Anulowany'' ELSE CASE WHEN trn_stan < 3 then ''W Buforze'' when trn_zaksiegowano = 1 then ''Zaksięgowane'' else ''Zatwierdzony'' end end' +@n 
 
 IF (@DokJednPom = 'Tak')	SET @select1 = @select1 + N',[Dokument - Jednostka Pomocnicza] = ISNULL(TRE.Tre_JmZ,''<nieznany>'')' + @n
 IF (@TwrJednPod = 'Tak')	SET @select1 = @select1 + N',[Produkt - Jednostka Podstawowa] = ISNULL(TWR.Twr_Jm,''<nieznany>'')' + @n
 
 IF (@MagKod = 'Tak')		SET @select1 = @select1 + N',[Magazyn - Kod] = ISNULL(MAG.MAG_Kod,''<nieznany>'')' + @n
 IF (@MagNazwa = 'Tak')	SET @select1 = @select1 + N',[Magazyn - Nazwa] = ISNULL(MAG.MAG_Nazwa,''<nieznany>'')' + @n
 
 IF (@TwrKod = 'Tak')		SET @select1 = @select1 + N',[Produkt - Kod] = ISNULL(TWR.Twr_Kod, ''<nieznany>''),
										[Produkt - Kod __PROCID__] = isnull(twr.TWR_gidtyp,-1)
										,[Produkt - Kod __ORGID__] = isnull(TWR.TWR_gidnumer,-1)' + @n
 IF (@TwrNazwa = 'Tak')	SET @select1 = @select1 + N',[Produkt - Nazwa] = ISNULL(TWR.Twr_Nazwa, ''<nieznany>''),
										[Produkt - Nazwa __PROCID__] = isnull(twr.TWR_gidtyp,-1)
										,[Produkt - Nazwa __ORGID__] = isnull(TWR.TWR_gidnumer,-1)' + @n
  
 IF (@kntregion = 'Tak' AND @czyKnt = 'Tak')	SET @select1 = @select1 + N',ISNULL(REJON.REJ_Nazwa,''<nieznany>'')	as [Rejon - Nazwa]' + @n
 
 IF (@czyRegGr = 'Tak' AND @czyKnt = 'Tak')	SET @select1 = @select1 + @kolumnyRejony +@n
 IF (@czyKntGr = 'Tak' AND @czyKnt = 'Tak')	SET @select1 = @select1 + @kolumnyKntGrupy +@n
 IF (@czyTwrGr = 'Tak' AND @czyTwr = 'Tak')	SET @select1 = @select1 + @kolumnyTwr +@n
-----------------------------------------  MIARY  --------------------------------------------------------------
 IF (@SprWart = 'Tak')	SET @select1 = @select1 + 
	 N',[Sprzedaż Wartość] = CASE WHEN TRE.Tre_GidLp is NULL 
								THEN TRN.Trn_nettoR   
								ELSE CASE WHEN TRE.Tre_KosztKsiegowy<> 0 
											THEN (TRS.Trs_KosztKsiegowy / TRE.Tre_KosztKsiegowy)* TRE.Tre_KsiegowaNetto
											ELSE TRE.Tre_ksiegowanetto  / isnull(TRSCount.Trs_Count,1)
											END   
								END' +@n
 IF (@SprWartBr = 'Tak')	SET @select1 = @select1 + 
	 N',[Sprzedaż Wartość Brutto] = CASE WHEN TRE.Tre_GidLp is NULL 
										THEN (TRN.Trn_nettoR   + TRN.TrN_VatR)
										ELSE CASE WHEN TRE.Tre_KosztKsiegowy<> 0 
													THEN (TRS.Trs_KosztKsiegowy / TRE.Tre_KosztKsiegowy)* TRE.Tre_Ksiegowabrutto
													ELSE TRE.Tre_ksiegowabrutto  / isnull(TRSCount.Trs_Count,1)
													END   
										END' +@n
									 
 IF (@SprWartWal = 'Tak') SET @select1 = @select1 + 
	 N',[Sprzedaż Wartość Waluta] = CASE WHEN trn.trn_gidtyp = 2003 
										THEN 0 
										ELSE CASE WHEN TRE.Tre_GidLp is NULL 
													THEN TRN.Trn_nettoR   / (trn.trn_kursl/trn.trn_kursm)
													ELSE CASE WHEN TRE.Tre_KosztKsiegowy<> 0 
																THEN ((TRS.Trs_KosztKsiegowy / TRE.Tre_KosztKsiegowy)* TRE.Tre_KsiegowaNetto) / (trn.trn_kursl/trn.trn_kursm)
																ELSE (TRE.Tre_ksiegowanetto  / isnull(TRSCount.Trs_Count,1)) / (trn.trn_kursl/trn.trn_kursm)
																END   
													END 
										END' +@n
 IF (@SprKosztZ = 'Tak')	SET @select1 = @select1 +  N',[Sprzedaż Koszt Zakupu] = IsNull(TRS.Trs_KosztKsiegowy,0)' +@n 
 IF (@SprKosztR = 'Tak')	SET @select1 = @select1 +  N',[Sprzedaż Koszt Rzeczywisty] = IsNull(TRS.Trs_KosztRzeczywisty,0)' +@n 
 IF (@SprIlosc = 'Tak')	SET @select1 = @select1 +  N',[Sprzedaż Ilość] = IsNull(TRS.Trs_Ilosc,0)' +@n 
 IF (@SprMarza = 'Tak')	SET @select1 = @select1 + 
	 N',[Sprzedaż Marża] = CASE WHEN TRE.Tre_GidLp is NULL 
								THEN TRN.Trn_nettoR   
								ELSE CASE WHEN TRE.Tre_KosztKsiegowy<> 0 
											THEN (TRS.Trs_KosztKsiegowy / TRE.Tre_KosztKsiegowy)* TRE.Tre_KsiegowaNetto
											ELSE TRE.Tre_ksiegowanetto  / isnull(TRSCount.Trs_Count,1)
											END   
								END - IsNull(TRS.Trs_KosztKsiegowy,0)' +@n  
 
 IF (@SprIloscJPom = 'Tak') SET @select1 = @select1 + 
	 N',[Sprzedaż Ilość jedn pom] = CASE	WHEN isnull(TRE.Tre_przeliczl,0)=0 
										THEN 0 
										ELSE TRS.Trs_ilosc/TRE.Tre_przeliczl * TRE.tre_przeliczm 
										END' +@n 

 IF (Substring(@Select1,1,1) = ',') SET @select1 = SUBSTRING(@Select1, 2, LEN(@SELECT1))

SET @select2 = @select2 + N' 
FROM 
(
SELECT TRN.*,spi.*,OWN.OWN_iloscelementow ' +@n 
 IF (@czyDataAnal = 'Tak')			SET @select2 = @select2 + 
 N',[DataAnalityczna] = DATEADD(d, 
 case isnull(OWN.own_dataKsiegowania, DOK.Dok_DataKsiegowania) 
     when 0 then 
         case isnull(OWN.own_datacontrollingowa, DOK.Dok_DataControllingowa) 
  when 1 then TRN.Trn_data2 
  when 2 then TRN.Trn_data3 
  when 3 then 
   case when (TRN.Trn_data2-TRN.Trn_data3)<0  
    then TRN.Trn_data2 
    else TRN.Trn_data3  
   end 
  when 4 then case when trn.trn_exponorm in (2,3,4,5,14,15,23) or (trn.trn_exponorm in (6,7,8,9,10,11,12,13,16,17,18,19,21) and TRN.Trn_PotwierdzenieOdbioru=1) then TRN.Trn_DataOdprawyPotwierdzenia
else TRN.Trn_data3  end
  when 12 then TRN.Trn_Termin 
         end
     else   isnull( 
    datediff(d, convert(datetime,''28-12-1800'',105), convert(datetime,(cast(KSI.dzk_dzien as char(2))+ ''-''+cast(KSI.dzk_miesiac as char(2))+ ''-''+cast(KSI.dzk_rok as char(4))),105)),  
    case DOK.Dok_DataControllingowa 
     when 1 then TRN.Trn_data2 
     when 2 then TRN.Trn_data3 
     when 3 then 
      case when (TRN.Trn_data2-TRN.Trn_data3)<0 
       then TRN.Trn_data2
       else TRN.Trn_data3  
      end 
     when 4 then case when trn.trn_exponorm in (2,3,4,5,14,15,23) or (trn.trn_exponorm in (6,7,8,9,10,11,12,13,16,17,18,19,21) and TRN.Trn_PotwierdzenieOdbioru=1) then TRN.Trn_DataOdprawyPotwierdzenia
else TRN.Trn_data3  end
     when 12 then TRN.Trn_Termin 
    end ) 
 end 
 , CONVERT(DATETIME,''28-12-1800'', 105) ) ' + @n
 IF (@czyDataPlat = 'Tak')			SET @select2 = @select2 + N',[DataPlatnosci] = CASE WHEN trn.trn_termin = 0 THEN NULL ELSE DATEADD(d, trn.trn_termin, CONVERT(DATETIME,''28-12-1800'', 105)) END' + @n
 IF (@czyDataWyst = 'Tak')			SET @select2 = @select2 + N',[DataWystawienia] = DATEADD(d, trn.trn_data2, CONVERT(DATETIME,''28-12-1800'', 105)) ' +@n
 IF (@czyDataSprz = 'Tak')			SET @select2 = @select2 + N',[DataSprzedazy] = DATEADD(d, trn.trn_data3, CONVERT(DATETIME,''28-12-1800'', 105)) ' + @n
 
 SET @select2 = @select2 + 
N' FROM CDN.TraNag  TRN
LEFT OUTER JOIN CDN.opiswymnag OWN on 
  OWN.own_gidtyp = TRN.trn_gidtyp and 
  OWN.own_gidnumer = TRN.trn_gidnumer 
LEFT OUTER JOIN CDN.dokdefinicje DOK on 
  DOK.Dok_gidtyp = TRN.trn_gidtyp AND
  DOK.Dok_frsid = 1' + @n
IF (@czySpiDok = 'Tak') SET @select2 = @select2 + N'
left outer join 
	(
	select 
		x.TRN_GIDTYP as spi_gidtyp ,
		x.TRN_SPITYP as spi_spityp,
		x.TRN_TRNTYP as spi_trntyp,
		x.TRN_TRNNUMER as spi_trnnumer,
		x.TRN_TRNROK as spi_trnrok,
		x.TRN_TRNSERIA as spi_trnseria,
		x.TRN_TRNMIESIAC as spi_trnmiesiac,
		x.trn_gidnumer as spi_gidnumer,
		x.trn_waluta as spi_waluta,
		x.trn_trnlp as spi_trnlp,
		x.trn_stan as spi_stan,
		x.trn_zaksiegowano as spi_zaksiegowano,
		ob_skrot as spi_Skrot
		from cdn.tranag x
		LEFT OUTER JOIN CDN.Obiekty OBspi ON OBspi.OB_GIDTyp = x.TrN_GIDTyp
	) as spi 
	on trn.trn_spinumer = spi.spi_gidnumer
	and trn.trn_spityp = spi.spi_gidtyp' + @n
SET @select2 = @select2 + N'LEFT OUTER JOIN 
 ( 
  select * from cdn.zrodla ZRO 
  join cdn.dziennik DZK on 
    ZRO.zro_DtTyp = DZK.dzk_GidTyp and 
    ZRO.zro_DtNumer = DZK.dzk_GidNumer and 
    ZRO.zro_DtLp = DZK.dzk_GidLp 
  where ZRO.zro_trnlp = 0  and DZK.dzk_GidLp =0
 ) as KSI on 
  KSI.zro_TrnTyp = TRN.trn_gidtyp and 
  KSI.zro_TrnNumer = TRN.trn_gidnumer
WHERE 
( trn.TRN_Data3 BETWEEN ' + @n 
 SET @select2 = @select2 + convert(nvarchar,@DataOd)
 SET @select2 = @select2 + N'  AND '
 SET @select2 = @select2 + convert(nvarchar,@DataDo)
 SET @select2 = @select2 + N' ) ' +@n

 SET @select2 = @select2 +  ')TRN ' +@n
 IF (@czyDok = 'Tak')			SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.Obiekty OB ON OB.OB_GIDTyp = TRN.TrN_GIDTyp ' + @n 
 IF (@czyKnt = 'Tak')
BEGIN		
							SET @select2 = @select2 + N'LEFT OUTER JOIN	CDN.KntKarty KNT ON KNT.Knt_GIDNumer = TRN.TRN_KntNumer ' +@n
	IF (@KntOpiekun = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.KnTOpiekun KTO ON KNT.Knt_GIDNumer=KTO.KtO_KntNumer AND KTO.KtO_KntTyp=32 ' + @n
	IF (@KntOpiekun = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.PrcKarty PRC ON PRC.Prc_GIDNumer=KTO.KtO_PrcNumer' + @n
	IF (@KntRodzaj = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.Slowniki SLWR ON KNT.KNT_rodzaj = SLWR.slw_id' + @n
	IF (@kntregion = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.Rejony	 REJON  ON	KNT.Knt_RegionCRM = REJON.REJ_Id' + @n
	IF (@czyRegGr = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN #tmp_Regions	REJ  ON	KNT.Knt_RegionCRM = REJ.REJON_OrgId' + @n
	IF (@czyKntGr = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN #tmpKntGr		KNTG ON KNTG.GidTyp = 32 and KNTG.ID = KNT.Knt_GIDNumer' + @n
END
IF (@czyKnd = 'Tak')			SET @select2 = @select2 + N'LEFT OUTER JOIN	CDN.KntKarty KND ON KND.Knt_GIDNumer = TRN.TRN_KndNumer' + @n
IF (@czyKnp = 'Tak')			SET @select2 = @select2 + N'LEFT OUTER JOIN	CDN.KntKarty KNP ON KNP.Knt_GIDNumer = TRN.TRN_KnpNumer' + @n
							SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.TraElem TRE				ON TRN.Trn_GidNumer = TRE.Tre_GidNumer' + @n
IF (@czyTwr = 'Tak')			
BEGIN
							SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.TwrKarty TWR ON TRE.Tre_TwrTyp = TWR.twr_GIDTyp AND TRE.Tre_TwrNumer = TWR.twr_GIDNumer' + @n
	IF (@czyTwrGr = 'Tak')	SET @select2 = @select2 + N'LEFT OUTER JOIN #tmpTwrGr		TWRG ON TWRG.ID = TWR.twr_GIDNumer and TWRG.GidTyp = 16' + @n
END
							SET @select2 = @select2 + 
		N'LEFT OUTER JOIN CDN.TraSElem TRS			ON TRE.Tre_GidNumer = TRS.Trs_GidNumer AND TRE.Tre_GidLp = TRS.Trs_GidLp' + @n
IF (@czyMag = 'Tak')			SET @select2 = @select2 + N'LEFT OUTER JOIN CDN.Magazyny MAG ON TRS.TRS_MagNumer = MAG.Mag_GidNumer' + @n
							SET @select2 = @select2 + 
		N'LEFT OUTER JOIN 
		( 
			SELECT TRE_GIDNUMER, TRE_GIDLP, COUNT(*) AS TRS_COUNT 
			FROM CDN.TRAELEM
			JOIN CDN.TRASELEM ON TRE_GIDNUMER = TRS_GIDNUMER AND TRE_GIDLP = TRS_GIDLP
			WHERE TRE_KOSZTKSIEGOWY = 0
				AND TRE_GIDTYP in 
				(
					2033, --FS
					2041, --FSK
					2003, --KK
					2037, --FSE
					2045, --FKE
					2001, --WZ
					2009, --WZK
					2034, --PA
					2042, --PAK
					2005, --WZE
					2013, --WKE
					1521, -- FZ
					1529, --KFZ
					1520, --FRR
					1528, --FRK
					1489, --PZ
					1497, --KPZ
					2002, --PKA
					2010 --PKK
				)
			GROUP BY TRE_GIDNUMER, TRE_GIDLP
			HAVING COUNT(*) > 1
		) TRSCount									ON TRE.Tre_GidNumer = TRSCount.Tre_GidNumer 
													AND TRE.Tre_GidLp = TRSCount.Tre_GidLp  
											
WHERE
	(
	TRN.Trn_SpiTyp = TRN.Trn_GidTyp --nie s1 spinaczami
	AND 
	TRN.Trn_GidTyp in 
					(
					2033, --FS
					2041, --FSK
					2037, --FSE
					2045 --FKE
					)	
	)
OR
	(---bierzemy tylko KK powi1zane z dokumentami generujacymi przychody
	TRN.Trn_SpiTyp = TRN.Trn_GidTyp 
	AND TRN.Trn_GidTyp = 2003 
	AND TRS.Trs_ZwrTyp  in 
					(   
					2003, --KK
					2033, --FS
					2041, --FSK
					2003, --KK
					2037, --FSE
					2045, --FKE
					2001, --WZ
					2009, --WZK
					2034, --PA
					2042, --PAK
					2005, --WZE
					2013, --WKE
					2000, --WKA
					2008 --WKK
					)
	) 
OR
(
  (
	( TRN.Trn_SpiTyp <> 0 )
	OR
	( TRN.Trn_SpiTyp = 0  and TRN.Trn_GidTyp not in (2000, 2008) )
	)
	AND
	TRN.Trn_GidTyp in 
	(
		2001, --WZ
		2009, --WZK
		2034, --PA
		2042, --PAK
		2005, --WZE
		2013, --WKE
		2000, --WKA
		2008 --WKK
	)
  )
'

exec (@select + @select1 +@select2)

IF OBJECT_ID(N'tempdb..#tmp_Regions',N'U') IS NOT NULL
DROP TABLE #tmp_Regions

IF OBJECT_ID(N'tempdb..#tmpKntGr',N'U') IS NOT NULL
DROP TABLE #tmpKntGr

IF OBJECT_ID(N'tempdb..#tmpTwrGr',N'U') IS NOT NULL
DROP TABLE #tmpTwrGr
