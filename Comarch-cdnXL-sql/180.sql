SELECT     CDN.TwrKarty.Twr_Kod, dbo.ktKosztDostawyDlaDanegoPZiGIDTowaru(CDN.Dostawy.Dst_TrnNumer, CDN.TraElem.TrE_TwrKod, CDN.Dostawy.Dst_SubTrnLp) * CDN.TraSElem.TrS_Ilosc AS JM, 
                      CDN.TraNag.TrN_TrNNumer, CDN.TraSElem.TrS_Ilosc AS Ilosc, CDN.TraElem.TrE_KsiegowaNetto * CDN.TraSElem.TrS_Ilosc / CDN.TraElem.TrE_Ilosc AS WARTOSC, 
                      CDN.TraSElem.TrS_KosztKsiegowy, CASE CDN.TwrKarty.Twr_Typ WHEN 1 THEN 'T' WHEN 4 THEN 'U' ELSE 'inne' END AS typ, CDN.OpeKarty.Ope_Ident, CDN.TraNag.TrN_Data2, 
                      CDN.KntKarty.Knt_Akronim AS Dostawca
FROM         CDN.TraNag AS TraNag_1 INNER JOIN
                      CDN.Dostawy ON TraNag_1.TrN_GIDTyp = CDN.Dostawy.Dst_TrnTyp AND TraNag_1.TrN_GIDNumer = CDN.Dostawy.Dst_TrnNumer INNER JOIN
                      CDN.KntKarty ON TraNag_1.TrN_KntTyp = CDN.KntKarty.Knt_GIDTyp AND TraNag_1.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer RIGHT OUTER JOIN
                      CDN.TraNag INNER JOIN
                      CDN.TraElem ON CDN.TraNag.TrN_GIDTyp = CDN.TraElem.TrE_GIDTyp AND CDN.TraNag.TrN_GIDNumer = CDN.TraElem.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty ON CDN.TraElem.TrE_TwrTyp = CDN.TwrKarty.Twr_GIDTyp AND CDN.TraElem.TrE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem ON CDN.TraElem.TrE_GIDNumer = CDN.TraSElem.TrS_GIDNumer AND CDN.TraElem.TrE_GIDLp = CDN.TraSElem.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty ON CDN.TraNag.TrN_OpeTypW = CDN.OpeKarty.Ope_GIDTyp AND CDN.TraNag.TrN_OpeNumerW = CDN.OpeKarty.Ope_GIDNumer INNER JOIN
                      CDN.TwrCeny ON CDN.TwrKarty.Twr_GIDNumer = CDN.TwrCeny.TwC_TwrNumer INNER JOIN
                      CDN.TwrCeny AS TwrCeny_1 ON CDN.TwrKarty.Twr_GIDNumer = TwrCeny_1.TwC_TwrNumer ON CDN.Dostawy.Dst_GIDTyp = CDN.TraSElem.TrS_DstTyp AND 
                      CDN.Dostawy.Dst_GIDNumer = CDN.TraSElem.TrS_DstNumer LEFT OUTER JOIN
                      CDN.Magazyny ON CDN.TraSElem.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND CDN.TraSElem.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer
WHERE     (CDN.TraNag.TrN_Data2 >= 78815) AND (CDN.TraNag.TrN_Data2 <= 78815) AND (CDN.TraNag.TrN_GIDTyp = 2041 OR
                      CDN.TraNag.TrN_GIDTyp = 2033 OR
                      CDN.TraNag.TrN_GIDTyp = 2034 OR
                      CDN.TraNag.TrN_GIDTyp = 2042 OR
                      CDN.TraNag.TrN_GIDTyp = 2045 OR
                      CDN.TraNag.TrN_GIDTyp = 2037) AND (CDN.TraElem.TrE_Ilosc <> 0) AND (CDN.TwrCeny.TwC_TwrLp = 3) AND (TwrCeny_1.TwC_TwrLp = 1)
ORDER BY CDN.TwrKarty.Twr_Kod

