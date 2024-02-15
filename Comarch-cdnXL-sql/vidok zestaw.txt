SELECT     TOP (100) PERCENT CDN.TwrKarty.Twr_Kod AS katalog, CDN.TwrKarty.Twr_Jm AS JM, CDN.TraNag.TrN_TrNNumer AS numer_dok, CDN.TraSElem.TrS_Ilosc AS Ilosc, 
                      CDN.TraElem.TrE_KsiegowaNetto * CDN.TraSElem.TrS_Ilosc / CDN.TraElem.TrE_Ilosc AS WARTOSC, CDN.TraSElem.TrS_KosztKsiegowy, 
                      CASE CDN.TwrKarty.Twr_Typ WHEN 1 THEN 'T' WHEN 4 THEN 'U' ELSE 'inne' END AS typ, SUBSTRING(CDN.OpeKarty.Ope_Ident, 1, 2) AS oper, CONVERT(varchar(10), 
                      CDN.TSToDate(TraNag_1.TrN_Data2, 0), 120) AS data_dost, CDN.KntKarty.Knt_Akronim AS Dostawca, KntKarty_1.Knt_Akronim AS odbiorca, CDN.TraElem.TrE_TwrNazwa, 
                      CDN.TwrKarty.Twr_WagaBrutto, CDN.Magazyny.MAG_Kod, CONVERT(varchar(10), CDN.TSToDate(CDN.TraNag.TrN_Data2, 0), 120) AS data
FROM         CDN.KntKarty AS KntKarty_1 INNER JOIN
                      CDN.TraNag INNER JOIN
                      CDN.TraElem ON CDN.TraNag.TrN_GIDTyp = CDN.TraElem.TrE_GIDTyp AND CDN.TraNag.TrN_GIDNumer = CDN.TraElem.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty ON CDN.TraElem.TrE_TwrTyp = CDN.TwrKarty.Twr_GIDTyp AND CDN.TraElem.TrE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem ON CDN.TraElem.TrE_GIDNumer = CDN.TraSElem.TrS_GIDNumer AND CDN.TraElem.TrE_GIDLp = CDN.TraSElem.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty ON CDN.TraNag.TrN_OpeTypW = CDN.OpeKarty.Ope_GIDTyp AND CDN.TraNag.TrN_OpeNumerW = CDN.OpeKarty.Ope_GIDNumer INNER JOIN
                      CDN.TwrCeny ON CDN.TwrKarty.Twr_GIDNumer = CDN.TwrCeny.TwC_TwrNumer INNER JOIN
                      CDN.TwrCeny AS TwrCeny_1 ON CDN.TwrKarty.Twr_GIDNumer = TwrCeny_1.TwC_TwrNumer ON KntKarty_1.Knt_GIDNumer = CDN.TraNag.TrN_KntNumer LEFT OUTER JOIN
                      CDN.TraNag AS TraNag_1 INNER JOIN
                      CDN.Dostawy ON TraNag_1.TrN_GIDTyp = CDN.Dostawy.Dst_TrnTyp AND TraNag_1.TrN_GIDNumer = CDN.Dostawy.Dst_TrnNumer INNER JOIN
                      CDN.KntKarty ON TraNag_1.TrN_KntTyp = CDN.KntKarty.Knt_GIDTyp AND TraNag_1.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer ON CDN.TraSElem.TrS_DstTyp = CDN.Dostawy.Dst_GIDTyp AND 
                      CDN.TraSElem.TrS_DstNumer = CDN.Dostawy.Dst_GIDNumer LEFT OUTER JOIN
                      CDN.Magazyny ON CDN.TraSElem.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND CDN.TraSElem.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer
WHERE     (CDN.TraNag.TrN_Data2 >= 77801) AND (CDN.TraNag.TrN_GIDTyp = 2041 OR
                      CDN.TraNag.TrN_GIDTyp = 2033 OR
                      CDN.TraNag.TrN_GIDTyp = 2034 OR
                      CDN.TraNag.TrN_GIDTyp = 2042 OR
                      CDN.TraNag.TrN_GIDTyp = 2045 OR
                      CDN.TraNag.TrN_GIDTyp = 2037) AND (CDN.TraElem.TrE_Ilosc <> 0) AND (CDN.TwrCeny.TwC_TwrLp = 3) AND (TwrCeny_1.TwC_TwrLp = 1)
ORDER BY katalog
