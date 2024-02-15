SELECT     CDN.ZlcNag.ZcN_GIDNumer, CDN.ZlcNag.ZcN_ZlcSeria, CDN.ZlcNag.ZcN_ZlcNumer, CDN.TSToDate(CDN.ZlcNag.ZcN_DataRealizacji, 0) AS data, 
                      CASE CDN.ZlcElem.ZcE_TwrNazwa WHEN 'Usługa marżowa' THEN 'marza' ELSE 'pozostałe' END AS Expr2, CDN.ZlcElem.ZcE_KosztEwidencyjny, CDN.KntKarty.Knt_Akronim, 
                      CASE CDN.KntKarty.Knt_Akronim WHEN 'OLKIEWICZ JADWIGA' THEN 'JO' WHEN 'CURYŁO RADOSŁAW' THEN 'RC' WHEN 'KRASUCKI ŁUKASZ' THEN 'LK' WHEN 'ŚWITALSKI MAREK' THEN 'MS' WHEN
                       'ŻURAWSKI KRZYSZTOF' THEN 'KZ' WHEN 'KONOPKA IZABELA' THEN 'I-' WHEN 'KOPIŃSKI MATEUSZ' THEN 'MK' WHEN 'MAKOWSKA BOŻENA' THEN 'BM' WHEN 'PIOTR ŁOJCZYK' THEN 'PL' WHEN
                       'PISARSKI MARIUSZ' THEN 'MP' WHEN 'ZIELIŃSKA JOLANTA' THEN 'JZ' ELSE 'PRD' END AS Expr1
FROM         CDN.ZlcNag INNER JOIN
                      CDN.ZlcElem ON CDN.ZlcNag.ZcN_GIDNumer = CDN.ZlcElem.ZcE_GIDNumer INNER JOIN
                      CDN.KntKarty ON CDN.ZlcNag.ZcN_KntNumer = CDN.KntKarty.Knt_GIDNumer
WHERE     (CDN.ZlcNag.ZcN_DataRealizacji >= 78580) AND (CDN.ZlcNag.ZcN_GIDTyp = 4192) AND (CDN.ZlcNag.ZcN_ZlcSeria = 'PRD') AND (CDN.ZlcElem.ZcE_KosztEwidencyjny > 0)
