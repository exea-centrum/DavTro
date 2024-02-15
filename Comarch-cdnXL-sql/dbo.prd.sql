/****** Script for SelectTopNRows command from SSMS  ******/
SELECT     CDN.ZlcNag.ZcN_GIDNumer, CDN.ZlcNag.ZcN_ZlcSeria, CDN.ZlcNag.ZcN_ZlcNumer, CDN.ZlcNag.ZcN_DataRealizacji, CDN.ZlcElem.ZcE_TwrNazwa, CDN.ZlcElem.ZcE_KosztEwidencyjny, 
                      CDN.KntKarty.Knt_Akronim, 
                      CASE CDN.KntKarty.Knt_Akronim WHEN 'OLKIEWICZ JADWIGA' THEN 'JO' WHEN 'CURY£O RADOS£AW' THEN 'RC' WHEN 'KRASUCKI £UKASZ' THEN 'LK' WHEN 'ŒWITALSKI MAREK' THEN 'MS' WHEN
                       '¯URAWSKI KRZYSZTOF' THEN 'KZ' ELSE 'PRD' END AS Expr1
FROM         CDN.ZlcNag INNER JOIN
                      CDN.ZlcElem ON CDN.ZlcNag.ZcN_GIDNumer = CDN.ZlcElem.ZcE_GIDNumer INNER JOIN
                      CDN.KntKarty ON CDN.ZlcNag.ZcN_KntNumer = CDN.KntKarty.Knt_GIDNumer
WHERE     (CDN.ZlcNag.ZcN_DataRealizacji >= 78600) AND (CDN.ZlcNag.ZcN_GIDTyp = 4192) AND (CDN.ZlcNag.ZcN_ZlcSeria = 'PRD') AND 
                      (CDN.ZlcElem.ZcE_KosztEwidencyjny > 0)