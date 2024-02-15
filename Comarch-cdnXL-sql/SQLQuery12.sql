SELECT     ELEM.TrE_TwrKod, CDN.Magazyny.MAG_Kod, SELEMWZ.TrS_Ilosc AS ilosc, ELEM.TrE_TwrNazwa, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc - SELEMWZ.TrS_KosztKsiegowy AS WARTMarza, 
                      ELEM.TrE_KsiegowaNetto * SELEMWZ.TrS_Ilosc / ELEM.TrE_Ilosc AS WARTOSCnetto, CASE [TWRKarta].Twr_Typ WHEN 1 THEN (CASE substring([TWRKarta].Twr_Kod, 1, 2) 
                      WHEN 'UH' THEN 'U' WHEN 'UP' THEN 'X' WHEN 'UT' THEN 'X' ELSE 'T' END) WHEN 4 THEN 'U' ELSE 'inne' END AS typ, SUBSTRING(OPERATOR.Ope_Ident, 1, 2) AS Operator, 
                      dbo.ktKosztDostawyDlaDanegoPZiGIDTowaru(DOST.Dst_TrnNumer, ELEM.TrE_TwrKod, DOST.Dst_SubTrnLp) * SELEMWZ.TrS_Ilosc AS koszt_dostawy, NAG.TrN_Data2, DOST.Dst_GIDTyp, 
                      DOST.Dst_GIDNumer, CDN.Dostawy.Dst_GIDTyp AS Expr1, CDN.Dostawy.Dst_GIDNumer AS Expr2, CDN.Dostawy.Dst_TrnTyp, CDN.Dostawy.Dst_TrnNumer, CDN.TraNag.TrN_GIDNumer, 
                      CDN.TraNag.TrN_GIDTyp, CDN.KntKarty.Knt_Akronim, NAG.TrN_KntFirma, NAG.TrN_TrNRok, NAG.TrN_TrNSeria, NAG.TrN_TrNNumer
FROM         CDN.TraNag INNER JOIN
                      CDN.TraElem AS ELEM INNER JOIN
                      CDN.TraNag AS NAG ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty AS TWRKarta ON ELEM.TrE_TwrTyp = TWRKarta.Twr_GIDTyp AND ELEM.TrE_TwrNumer = TWRKarta.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem AS SELEMWZ ON ELEM.TrE_GIDNumer = SELEMWZ.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEMWZ.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty AS OPERATOR ON NAG.TrN_OpeTypW = OPERATOR.Ope_GIDTyp AND NAG.TrN_OpeNumerW = OPERATOR.Ope_GIDNumer INNER JOIN
                      CDN.Magazyny ON SELEMWZ.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND SELEMWZ.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.Dostawy ON SELEMWZ.TrS_DstTyp = CDN.Dostawy.Dst_GIDTyp AND SELEMWZ.TrS_DstNumer = CDN.Dostawy.Dst_GIDNumer ON CDN.TraNag.TrN_GIDTyp = CDN.Dostawy.Dst_TrnTyp AND 
                      CDN.TraNag.TrN_GIDNumer = CDN.Dostawy.Dst_TrnNumer INNER JOIN
                      CDN.KntKarty ON CDN.TraNag.TrN_KntTyp = CDN.KntKarty.Knt_GIDTyp AND CDN.TraNag.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer LEFT OUTER JOIN
                      CDN.Dostawy AS DOST ON SELEMWZ.TrS_DstNumer = DOST.Dst_GIDNumer AND SELEMWZ.TrS_DstTyp = DOST.Dst_GIDTyp
WHERE     (NAG.TrN_Data2 >= 78683) AND (NAG.TrN_Data2 <= 78712) AND (NAG.TrN_GIDTyp = 2041 OR
                      NAG.TrN_GIDTyp = 2033 OR
                      NAG.TrN_GIDTyp = 2034 OR
                      NAG.TrN_GIDTyp = 2042 OR
                      NAG.TrN_GIDTyp = 2045 OR
                      NAG.TrN_GIDTyp = 2037) AND (ELEM.TrE_Ilosc <> 0.00)