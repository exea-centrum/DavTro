SELECT     ELEM.TrE_TwrKod, (select top 1 MAG_Kod from cdn.Magazyny where MAG_GIDNumer=NAG.TrN_MagZNumer) AS MAG_Kod, /*CDN.Magazyny.MAG_Kod,*/ NAG.TrN_TrNNumer, ELEM.TrE_Ilosc AS Ilosc, /*SELEMWZ.TrS_Ilosc AS ilosc,*/ ELEM.TrE_TwrNazwa
						, TrE_KsiegowaNetto AS WARTMarza
                         ,TrE_KsiegowaNetto AS WARTOSCnetto
                         
                      , CASE [TWRKarta].Twr_Typ WHEN 4 THEN (CASE substring([TWRKarta].Twr_Kod, 1, 2) 
                      WHEN 'UU' THEN 'Y' WHEN 'UH' THEN 'U' WHEN 'UP' THEN 'X' WHEN 'UT' THEN 'X' ELSE 'T' END) WHEN 1 THEN 'T' ELSE 'inne' END AS typ, CASE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) 
                      WHEN 'BT' THEN 'PRD' WHEN 'TC' THEN 'PRD' WHEN 'TP' THEN 'PRD' WHEN 'AJ' THEN 'GC' WHEN 'MG' THEN 'GC' ELSE SUBSTRING(OPERATOR.Ope_Ident, 1, 2) END AS Operator, 
                      0.00000 AS koszt_dostawy, CONVERT(varchar(10), CDN.TSToDate(NAG.TrN_Data2, 0), 120) AS data, SUBSTRING(ELEM.TrE_TwrKod, 1, 1) AS SKR, SUBSTRING(ELEM.TrE_TwrKod, 1, 2) AS SKR1, 
                      NAG.TrN_TrNSeria
FROM         CDN.TraElem AS ELEM inner JOIN
                      CDN.TraNag AS NAG ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer LEFT outer JOIN
                      CDN.TwrKarty AS TWRKarta ON ELEM.TrE_TwrTyp = TWRKarta.Twr_GIDTyp AND ELEM.TrE_TwrNumer = TWRKarta.Twr_GIDNumer 
                      /*left outer JOIN         CDN.TraSElem AS SELEMWZ ON ELEM.TrE_GIDNumer = SELEMWZ.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEMWZ.TrS_GIDLp */
                      left outer JOIN          CDN.OpeKarty AS OPERATOR ON NAG.TrN_OpeTypW = OPERATOR.Ope_GIDTyp AND NAG.TrN_OpeNumerW = OPERATOR.Ope_GIDNumer 
                      /*INNER JOIN                   CDN.Magazyny ON SELEMWZ.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND SELEMWZ.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer 
                      LEFT OUTER JOIN                     CDN.Dostawy AS DOST ON SELEMWZ.TrS_DstNumer = DOST.Dst_GIDNumer AND SELEMWZ.TrS_DstTyp = DOST.Dst_GIDTyp*/
WHERE     (cdn.tstodate(NAG.TrN_Data2,0) >= '2016-01-01') AND (NAG.TrN_GIDTyp = 2041 OR
                      NAG.TrN_GIDTyp = 2033 OR
                      NAG.TrN_GIDTyp = 2034 OR
                      NAG.TrN_GIDTyp = 2042 OR
                      NAG.TrN_GIDTyp = 2045 OR
                      NAG.TrN_GIDTyp = 2037) AND (ELEM.TrE_Ilosc = 0.00)
           /* do skasowania =>*/           and(TrN_TrNSeria='T_K')and(TrN_TrNNumer=2)	;


                      
/*                      
select * 
from cdn.TraElem
where TrE_GIDTyp=2041 AND TrE_GIDFirma=124929 AND TrE_GIDNumer=173371

select * 
from cdn.TraSElem
where TrS_GIDTyp=2041 AND TrS_GIDFirma=124929 AND TrS_GIDNumer=173371
*/