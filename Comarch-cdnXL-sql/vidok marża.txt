SELECT     ELEM.TrE_TwrKod, CDN.Magazyny.MAG_Kod, NAG.TrN_TrNNumer, SELEMWZ.TrS_Ilosc AS ilosc, ELEM.TrE_TwrNazwa, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc - SELEMWZ.TrS_KosztKsiegowy AS WARTMarza, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc AS WARTOSCnetto, CASE [TWRKarta].Twr_Typ WHEN 4 THEN (CASE substring([TWRKarta].Twr_Kod, 1, 2) 
                      WHEN 'UU' THEN 'Y' WHEN 'UH' THEN 'U' WHEN 'UP' THEN 'X' WHEN 'UT' THEN 'X' ELSE 'T' END) WHEN 1 THEN 'T' ELSE 'inne' END AS typ, CASE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) 
                      WHEN 'BT' THEN 'PRD' WHEN 'TC' THEN 'PRD' WHEN 'TP' THEN 'PRD' WHEN 'AJ' THEN 'GC' WHEN 'MG' THEN 'GC' ELSE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) END AS Operator, 
                      dbo.ktKosztDostawyDlaDanegoPZiGIDTowaru(DOST.Dst_TrnNumer, ELEM.TrE_TwrKod, DOST.Dst_SubTrnLp) * SELEMWZ.TrS_Ilosc AS koszt_dostawy, CONVERT(varchar(10), 
                      CDN.TSToDate(NAG.TrN_Data2, 0), 120) AS data, SUBSTRING(ELEM.TrE_TwrKod, 1, 1) AS SKR, SUBSTRING(ELEM.TrE_TwrKod, 1, 2) AS SKR1, NAG.TrN_TrNSeria
FROM         CDN.TraElem AS ELEM INNER JOIN
                      CDN.TraNag AS NAG ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty AS TWRKarta ON ELEM.TrE_TwrTyp = TWRKarta.Twr_GIDTyp AND ELEM.TrE_TwrNumer = TWRKarta.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem AS SELEMWZ ON ELEM.TrE_GIDNumer = SELEMWZ.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEMWZ.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty AS OPERATOR ON NAG.TrN_OpeTypW = OPERATOR.Ope_GIDTyp AND NAG.TrN_OpeNumerW = OPERATOR.Ope_GIDNumer INNER JOIN
                      CDN.Magazyny ON SELEMWZ.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND SELEMWZ.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer LEFT OUTER JOIN
                      CDN.Dostawy AS DOST ON SELEMWZ.TrS_DstNumer = DOST.Dst_GIDNumer AND SELEMWZ.TrS_DstTyp = DOST.Dst_GIDTyp
WHERE     (NAG.TrN_Data2 >= 78620) AND (NAG.TrN_GIDTyp = 2041 OR
                      NAG.TrN_GIDTyp = 2033 OR
                      NAG.TrN_GIDTyp = 2034 OR
                      NAG.TrN_GIDTyp = 2042 OR
                      NAG.TrN_GIDTyp = 2045 OR
                      NAG.TrN_GIDTyp = 2037) AND (ELEM.TrE_Ilosc <> 0.00)
UNION ALL
SELECT     ELEM.TrE_TwrKod, 0 [MAG_Kod], NAG.TrN_TrNNumer, SELEMWZ.TrS_Ilosc AS ilosc, ELEM.TrE_TwrNazwa, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc - SELEMWZ.TrS_KosztKsiegowy AS WARTMarza, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc AS WARTOSCnetto, CASE [TWRKarta].Twr_Typ WHEN 4 THEN (CASE substring([TWRKarta].Twr_Kod, 1, 2) 
                      WHEN 'UU' THEN 'Y' WHEN 'UH' THEN 'U' WHEN 'UP' THEN 'X' WHEN 'UT' THEN 'X' ELSE 'T' END) WHEN 1 THEN 'T' ELSE 'inne' END AS typ, CASE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) 
                      WHEN 'BT' THEN 'PRD' WHEN 'TC' THEN 'PRD' WHEN 'TP' THEN 'PRD' WHEN 'AJ' THEN 'GC' WHEN 'MG' THEN 'GC' ELSE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) END AS Operator, 
                      0 AS koszt_dostawy, CONVERT(varchar(10), CDN.TSToDate(NAG.TrN_Data2, 0), 120) AS data, SUBSTRING(ELEM.TrE_TwrKod, 1, 1) AS SKR, SUBSTRING(ELEM.TrE_TwrKod, 1, 2) AS SKR1, 
                      NAG.TrN_TrNSeria
FROM         CDN.TraElem AS ELEM INNER JOIN
                      CDN.TraNag AS NAG ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty AS TWRKarta ON ELEM.TrE_TwrTyp = TWRKarta.Twr_GIDTyp AND ELEM.TrE_TwrNumer = TWRKarta.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem AS SELEMWZ ON ELEM.TrE_GIDNumer = SELEMWZ.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEMWZ.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty AS OPERATOR ON NAG.TrN_OpeTypW = OPERATOR.Ope_GIDTyp AND 
                      NAG.TrN_OpeNumerW = OPERATOR.Ope_GIDNumer
/*INNER JOIN
                      CDN.Magazyny ON SELEMWZ.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND SELEMWZ.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer LEFT OUTER JOIN
                      CDN.Dostawy AS DOST ON SELEMWZ.TrS_DstNumer = DOST.Dst_GIDNumer AND SELEMWZ.TrS_DstTyp = DOST.Dst_GIDTyp */ WHERE
                       (NAG.TrN_Data2 >= 78620) AND (NAG.TrN_GIDTyp = 2041 OR
                      NAG.TrN_GIDTyp = 2033 OR
                      NAG.TrN_GIDTyp = 2034 OR
                      NAG.TrN_GIDTyp = 2042 OR
                      NAG.TrN_GIDTyp = 2045 OR
                      NAG.TrN_GIDTyp = 2037) AND (ELEM.TrE_Ilosc <> 0.00) AND (TWRKarta.Twr_Typ = 4)
UNION ALL
SELECT     ELEM.TrE_TwrKod,
                          (SELECT     TOP 1 MAG_Kod
                            FROM          cdn.Magazyny
                            WHERE      MAG_GIDNumer = NAG.TrN_MagZNumer) AS MAG_Kod, /*CDN.Magazyny.MAG_Kod,*/ NAG.TrN_TrNNumer, ELEM.TrE_Ilosc AS Ilosc, 
                      /*SELEMWZ.TrS_Ilosc AS ilosc,*/ ELEM.TrE_TwrNazwa, TrE_KsiegowaNetto AS WARTMarza, TrE_KsiegowaNetto AS WARTOSCnetto, 
                      CASE [TWRKarta].Twr_Typ WHEN 4 THEN (CASE substring([TWRKarta].Twr_Kod, 1, 2) WHEN 'UU' THEN 'Y' WHEN 'UH' THEN 'U' WHEN 'UP' THEN 'X' WHEN 'UT' THEN 'X' ELSE 'T' END) 
                      WHEN 1 THEN 'T' ELSE 'inne' END AS typ, CASE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) 
                      WHEN 'BT' THEN 'PRD' WHEN 'TC' THEN 'PRD' WHEN 'TP' THEN 'PRD' WHEN 'AJ' THEN 'GC' WHEN 'MG' THEN 'GC' ELSE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) END AS Operator, 
                      0.00000 AS koszt_dostawy, CONVERT(varchar(10), CDN.TSToDate(NAG.TrN_Data2, 0), 120) AS data, SUBSTRING(ELEM.TrE_TwrKod, 1, 1) AS SKR, SUBSTRING(ELEM.TrE_TwrKod, 1, 2) AS SKR1, 
                      NAG.TrN_TrNSeria
FROM         CDN.TraElem AS ELEM INNER JOIN
                      CDN.TraNag AS NAG ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer LEFT OUTER JOIN
                      CDN.TwrKarty AS TWRKarta ON ELEM.TrE_TwrTyp = TWRKarta.Twr_GIDTyp AND 
                      ELEM.TrE_TwrNumer = TWRKarta.Twr_GIDNumer /*left outer JOIN         CDN.TraSElem AS SELEMWZ ON ELEM.TrE_GIDNumer = SELEMWZ.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEMWZ.TrS_GIDLp */ LEFT
                       OUTER JOIN
                      CDN.OpeKarty AS OPERATOR ON NAG.TrN_OpeTypW = OPERATOR.Ope_GIDTyp AND 
                      NAG.TrN_OpeNumerW = OPERATOR.Ope_GIDNumer
/*INNER JOIN                   CDN.Magazyny ON SELEMWZ.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND SELEMWZ.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer 
                      LEFT OUTER JOIN                     CDN.Dostawy AS DOST ON SELEMWZ.TrS_DstNumer = DOST.Dst_GIDNumer AND SELEMWZ.TrS_DstTyp = DOST.Dst_GIDTyp*/ WHERE
                       (NAG.TrN_Data2 >= 78620) AND (NAG.TrN_GIDTyp = 2041 OR
                      NAG.TrN_GIDTyp = 2033 OR
                      NAG.TrN_GIDTyp = 2034 OR
                      NAG.TrN_GIDTyp = 2042 OR
                      NAG.TrN_GIDTyp = 2045 OR
                      NAG.TrN_GIDTyp = 2037) AND (ELEM.TrE_Ilosc = 0.00)
