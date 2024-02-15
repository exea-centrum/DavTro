SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwElem.P_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Ułożył' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float) AS [Pozycji / operator]
FROM         NMS_AwNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      CDN.PrcKarty ON NMS_AwElem.P_Oper = CDN.PrcKarty.Prc_GIDNumer ON NMS_AwNag.A_GNr = NMS_AwElem.P_GNr AND NMS_AwNag.A_GTyp = NMS_AwElem.P_GTyp INNER JOIN
                      CDN.MagNag ON NMS_AwElem.P_GNr = CDN.MagNag.MaN_GIDNumer AND NMS_AwElem.P_GTyp = CDN.MagNag.MaN_GIDTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwElem.P_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwElem.P_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78617)
UNION ALL
SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwElem.P_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Ułożył' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float) AS [Pozycji / operator]
FROM         CDN.MagNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      NMS_AwNag ON NMS_AwElem.P_GNr = NMS_AwNag.A_GNr AND NMS_AwElem.P_GTyp = NMS_AwNag.A_GTyp ON CDN.MagNag.MaN_GIDNumer = NMS_AwElem.P_GNr AND 
                      CDN.MagNag.MaN_GIDTyp = NMS_AwElem.P_GTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.PrcKarty ON NMS_AwElem.P_Oper1 = CDN.PrcKarty.Prc_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwElem.P_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwElem.P_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78617)
UNION ALL
SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwElem.P_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwElem.P_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Ułożył' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float) AS [Pozycji / operator]
FROM         CDN.MagNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      NMS_AwNag ON NMS_AwElem.P_GNr = NMS_AwNag.A_GNr AND NMS_AwElem.P_GTyp = NMS_AwNag.A_GTyp ON CDN.MagNag.MaN_GIDNumer = NMS_AwElem.P_GNr AND 
                      CDN.MagNag.MaN_GIDTyp = NMS_AwElem.P_GTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.PrcKarty ON NMS_AwElem.P_Oper2 = CDN.PrcKarty.Prc_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwElem.P_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwElem.P_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwElem.P_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78617)
UNION ALL
SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwNag.A_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Zatwierdził' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float) AS [Pozycji / operator]
FROM         CDN.MagNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      NMS_AwNag ON NMS_AwElem.P_GNr = NMS_AwNag.A_GNr AND NMS_AwElem.P_GTyp = NMS_AwNag.A_GTyp ON CDN.MagNag.MaN_GIDNumer = NMS_AwElem.P_GNr AND 
                      NMS_AwElem.P_GTyp = CDN.MagNag.MaN_GIDTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.PrcKarty ON NMS_AwNag.A_Oper = CDN.PrcKarty.Prc_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwNag.A_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwNag.A_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78617)
UNION ALL
SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwNag.A_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Zatwierdził' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float) AS [Pozycji / operator]
FROM         CDN.MagNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      NMS_AwNag ON NMS_AwElem.P_GNr = NMS_AwNag.A_GNr AND NMS_AwElem.P_GTyp = NMS_AwNag.A_GTyp ON CDN.MagNag.MaN_GIDNumer = NMS_AwElem.P_GNr AND 
                      NMS_AwElem.P_GTyp = CDN.MagNag.MaN_GIDTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.PrcKarty ON NMS_AwNag.A_Oper1 = CDN.PrcKarty.Prc_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwNag.A_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwNag.A_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78617)
UNION ALL
SELECT     CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko], CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_Waga AS [Towar waga brutto], NMS_AwNag.A_OperSuma AS [Liczba operatorów], SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma, 2) AS decimal(18, 2))) 
                      AS [Ilość / operator], 'Awizo' AS [Typ dokumentu], SUM(NMS_AwElem.P_iloscA) AS Ilość, SUM(CAST(ROUND(NMS_AwElem.P_iloscA / NMS_AwNag.A_OperSuma * CDN.TwrKarty.Twr_Waga, 2) 
                      AS decimal(18, 2))) AS [Waga / operator], CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, 
                      CDN.MagNag.MaN_TrNSeria, CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod AS [Numer dokumentu], CDN.Magazyny.MAG_Nazwa AS [Nazwa magazynu], DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, NMS_AwNag.A_MagKod AS [Kod magazynu], 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 1 AS Pozycji, 
                      'Zatwierdził' AS Rodzaj, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float) AS [Pozycji / operator]
FROM         CDN.MagNag INNER JOIN
                      CDN.TwrKarty INNER JOIN
                      NMS_AwElem ON CDN.TwrKarty.Twr_GIDNumer = NMS_AwElem.P_TwrId INNER JOIN
                      NMS_AwNag ON NMS_AwElem.P_GNr = NMS_AwNag.A_GNr AND NMS_AwElem.P_GTyp = NMS_AwNag.A_GTyp ON CDN.MagNag.MaN_GIDNumer = NMS_AwElem.P_GNr AND 
                      NMS_AwElem.P_GTyp = CDN.MagNag.MaN_GIDTyp INNER JOIN
                      CDN.Magazyny ON NMS_AwNag.A_Mag = CDN.Magazyny.MAG_GIDNumer INNER JOIN
                      CDN.PrcKarty ON NMS_AwNag.A_Oper2 = CDN.PrcKarty.Prc_GIDNumer
WHERE     (NMS_AwElem.P_iloscP = 0)
GROUP BY CDN.TwrKarty.Twr_Kod, CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko, CDN.TwrKarty.Twr_Nazwa, CDN.TwrKarty.Twr_Waga, NMS_AwNag.A_OperSuma, 
                      CDN.NumerDokumentu(CDN.MagNag.MaN_GIDTyp, 0, CDN.MagNag.MaN_TrNTyp, CDN.MagNag.MaN_TrNNumer, CDN.MagNag.MaN_TrNRok, CDN.MagNag.MaN_TrNSeria, 
                      CDN.MagNag.MaN_TrNMiesiac) + '-' + NMS_AwNag.A_MagKod, CDN.Magazyny.MAG_Nazwa, DATEADD(day, CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)), 
                      NMS_AwNag.A_MagKod, CAST(1 AS float) / CAST(NMS_AwNag.A_OperSuma AS float), CDN.MagNag.MaN_Data3, CDN.TwrKarty.Twr_Typ
HAVING      (NMS_AwNag.A_OperSuma <> 0) AND (CDN.MagNag.MaN_Data3 > 78622)
