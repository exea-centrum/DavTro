SELECT     LEFT(CDN.TwrKarty.Twr_Kod, 1) AS Radzio, CDN.TraNag.TrN_Data2, CDN.TraNag.TrN_TrNNumer, CDN.TwrKarty.Twr_WagaBrutto, CDN.TraSElem.TrS_Ilosc AS Ilosc, CDN.TraElem.TrE_TwrNazwa, 
                      CDN.TraElem.TrE_KsiegowaNetto * CDN.TraSElem.TrS_Ilosc / CDN.TraElem.TrE_Ilosc AS WARTOSC, CDN.TraSElem.TrS_KosztKsiegowy, 
                      CASE CDN.TwrKarty.Twr_Typ WHEN 1 THEN 'T' WHEN 4 THEN 'U' ELSE 'inne' END AS typ, CDN.OpeKarty.Ope_Ident,
                      CDN.KntKarty.Knt_GIDNumer,CDN.KntKarty.Knt_Akronim, CDN.KntKarty.Knt_Nip
                    
FROM         CDN.TraNag INNER JOIN
                      CDN.TraElem ON CDN.TraNag.TrN_GIDTyp = CDN.TraElem.TrE_GIDTyp AND CDN.TraNag.TrN_GIDNumer = CDN.TraElem.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty ON CDN.TraElem.TrE_TwrTyp = CDN.TwrKarty.Twr_GIDTyp AND CDN.TraElem.TrE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem ON CDN.TraElem.TrE_GIDNumer = CDN.TraSElem.TrS_GIDNumer AND CDN.TraElem.TrE_GIDLp = CDN.TraSElem.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty ON CDN.TraNag.TrN_OpeTypW = CDN.OpeKarty.Ope_GIDTyp AND CDN.TraNag.TrN_OpeNumerW = CDN.OpeKarty.Ope_GIDNumer LEFT OUTER JOIN
                      CDN.Magazyny ON CDN.TraSElem.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND CDN.TraSElem.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer LEFT OUTER JOIN
                      
                      CDN.KntKarty ON CDN.TraNag.TrN_KntNumer = CDN.KntKarty.Knt_GIDNumer
WHERE     CDN.TraNag.TrN_Data2>=?@D17|Za okres od:{date(month(today()),1,year(today()))} AND

 CDN.TraNag.TrN_Data2<=?@D17|do:{Today()} AND
                      CDN.TraNag.TrN_GIDTyp = 2033 OR
                      CDN.TraNag.TrN_GIDTyp = 2034 OR
                      CDN.TraNag.TrN_GIDTyp = 2042 OR
                      CDN.TraNag.TrN_GIDTyp = 2045 OR
                      CDN.TraNag.TrN_GIDTyp = 2037) AND (CDN.TraElem.TrE_Ilosc <> 0)
					  
					  
					  SELECT    LEFT(CDN.TwrKarty.Twr_Kod,1)as Radzio,  CDN.TraNag.TrN_Data2, CDN.TraNag.TrN_TrNNumer, CDN.TwrKarty.Twr_WagaBrutto, CDN.TraSElem.TrS_Ilosc AS Ilosc, 
                      CDN.TraElem.TrE_TwrNazwa, CDN.TraElem.TrE_KsiegowaNetto * CDN.TraSElem.TrS_Ilosc / CDN.TraElem.TrE_Ilosc AS WARTOSC, 
                      CDN.TraSElem.TrS_KosztKsiegowy, CASE CDN.TwrKarty.Twr_Typ WHEN 1 THEN 'T' WHEN 4 THEN 'U' ELSE 'inne' END AS typ, 
                      CDN.OpeKarty.Ope_Ident
FROM         CDN.TraNag INNER JOIN
                      CDN.TraElem ON CDN.TraNag.TrN_GIDTyp = CDN.TraElem.TrE_GIDTyp AND CDN.TraNag.TrN_GIDNumer = CDN.TraElem.TrE_GIDNumer INNER JOIN
                      CDN.TwrKarty ON CDN.TraElem.TrE_TwrTyp = CDN.TwrKarty.Twr_GIDTyp AND CDN.TraElem.TrE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer INNER JOIN
                      CDN.TraSElem ON CDN.TraElem.TrE_GIDNumer = CDN.TraSElem.TrS_GIDNumer AND 
                      CDN.TraElem.TrE_GIDLp = CDN.TraSElem.TrS_GIDLp INNER JOIN
                      CDN.OpeKarty ON CDN.TraNag.TrN_OpeTypW = CDN.OpeKarty.Ope_GIDTyp AND 
                      CDN.TraNag.TrN_OpeNumerW = CDN.OpeKarty.Ope_GIDNumer LEFT OUTER JOIN
                      CDN.Magazyny ON CDN.TraSElem.TrS_MagTyp = CDN.Magazyny.MAG_GIDTyp AND 
                      CDN.TraSElem.TrS_MagNumer = CDN.Magazyny.MAG_GIDNumer
WHERE    CDN.TraNag.TrN_Data2>=?@D17|Za okres od:{date(month(today()),1,year(today()))} AND

 CDN.TraNag.TrN_Data2<=?@D17|do:{Today()} AND

                      (CDN.TraNag.TrN_GIDTyp = 2041 OR

                      CDN.TraNag.TrN_GIDTyp = 2033 OR

                      CDN.TraNag.TrN_GIDTyp = 2034 OR

                      CDN.TraNag.TrN_GIDTyp = 2042 OR

                      CDN.TraNag.TrN_GIDTyp = 2045 OR

                      CDN.TraNag.TrN_GIDTyp = 2037) AND (CDN.TraElem.TrE_Ilosc <> 0)
ORDER BY  LEFT(CDN.TwrKarty.Twr_Kod,1)
