/****** Script for SelectTopNRows command from SSMS  ******/
SELECT     CDN.TraNag.TrN_GIDTyp, CDN.TraNag.TrN_KntNumer, CDN.TraNag.TrN_GIDNumer, CDN.TraNag.TrN_AkwNumer, CDN.TraNag.TrN_NettoR, CDN.TraNag.TrN_RokMiesiac, 
                      CDN.TraNag.TrN_OpeFirmaW, CDN.TraNag.TrN_OpiNumer, CDN.TraNag.TrN_Waga, CDN.TraNag.TrN_WagaBrutto, CDN.TraNag.TrN_GIDFirma, CDN.KntKarty.Knt_Akwizytor, 
                      CDN.KntKarty.Knt_Akronim, CDN.KntKarty.Knt_Nazwa1, CDN.KntKarty.Knt_Nip, CDN.KntKarty.Knt_AkwNumer, CDN.KntKarty.Knt_PrcNumer, CDN.PrcKarty.Prc_GIDNumer, CDN.PrcKarty.Prc_Akronim, 
                      CDN.PrcKarty.Prc_Imie1, CDN.PrcKarty.Prc_OpeNumer, CDN.PrcKarty.Prc_Nazwisko
FROM         CDN.TraNag INNER JOIN
                      CDN.KntKarty ON CDN.TraNag.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer INNER JOIN
                      CDN.PrcKarty ON CDN.TraNag.TrN_OpiNumer = CDN.PrcKarty.Prc_GIDNumer
WHERE     (CDN.TraNag.TrN_GIDNumer = '189142')



/****** Script for SelectTopNRows command from SSMS  ******/
SELECT      CDN.TraNag.TrN_GIDTyp  ,CDN.TraNag.TrN_KntNumer, CDN.TraNag.TrN_GIDNumer, CDN.TraNag.TrN_AkwNumer, CDN.TraNag.TrN_NettoR, CDN.TraNag.TrN_RokMiesiac, 
                      CDN.TraNag.TrN_OpeFirmaW, CDN.TraNag.TrN_OpiNumer, CDN.TraNag.TrN_Waga, CDN.TraNag.TrN_WagaBrutto, CDN.TraNag.TrN_GIDFirma, CDN.KntKarty.Knt_Akwizytor, 
                      CDN.KntKarty.Knt_Akronim, CDN.KntKarty.Knt_Nazwa1, CDN.KntKarty.Knt_Nip, CDN.KntKarty.Knt_AkwNumer, CDN.KntKarty.Knt_PrcNumer, CDN.PrcKarty.Prc_GIDNumer, CDN.PrcKarty.Prc_Akronim, 
                      CDN.PrcKarty.Prc_Imie1, CDN.PrcKarty.Prc_OpeNumer, CDN.PrcKarty.Prc_Nazwisko
                     
FROM         CDN.TraNag INNER JOIN
                      CDN.KntKarty ON CDN.TraNag.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer INNER JOIN
                      CDN.PrcKarty ON CDN.TraNag.TrN_OpiNumer = CDN.PrcKarty.Prc_GIDNumer
WHERE   CDN.TraNag.TrN_RokMiesiac BETWEEN 201501 AND 201609
 --- (CDN.TraNag.TrN_GIDNumer = '189142')
 
 SELECT     CDN.TwrKarty.Twr_Kod, CDN.TraNag.TrN_TrNNumer, CDN.TraSElem.TrS_Ilosc AS Ilosc, CDN.TraElem.TrE_KsiegowaNetto * CDN.TraSElem.TrS_Ilosc / CDN.TraElem.TrE_Ilosc AS WARTOSC, 
                      CDN.TraSElem.TrS_KosztKsiegowy, CDN.OpeKarty.Ope_Ident, TraNag_1.TrN_Data2 AS data_dost, KntKarty_1.Knt_Akronim AS odbiorca, CDN.TraNag.TrN_Data2, CDN.TwrKarty.Twr_Jm, 
                      CDN.OpeKarty.Ope_Nazwisko, TraNag_1.TrN_AkwNumer, TraNag_1.TrN_OpiNumer
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
WHERE     (CDN.TraNag.TrN_Data2 >= 78805) AND (CDN.TraNag.TrN_Data2 <= 78824) AND (CDN.TraNag.TrN_GIDTyp = 2041 OR
                      CDN.TraNag.TrN_GIDTyp = 2033 OR
                      CDN.TraNag.TrN_GIDTyp = 2034 OR
                      CDN.TraNag.TrN_GIDTyp = 2042 OR
                      CDN.TraNag.TrN_GIDTyp = 2045 OR
                      CDN.TraNag.TrN_GIDTyp = 2037) AND (CDN.TraElem.TrE_Ilosc <> 0) AND (CDN.TwrCeny.TwC_TwrLp = 3) AND (TwrCeny_1.TwC_TwrLp = 1)
ORDER BY CDN.TwrKarty.Twr_Kod
