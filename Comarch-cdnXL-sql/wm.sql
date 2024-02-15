SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnElem.E_Oper = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [OP suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, CDN.MagNag.MaN_Data3, 
                      CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Ułożył' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                              FROM         NMS_TrnElem AS NMS_TrnElem_1
                              WHERE     (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnElem.E_Oper = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = CDN.MagElem.MaE_GIDNumer)) <> ''
UNION ALL
SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) PrcKarty_2.Prc_Imie1 + CHAR(32) + PrcKarty_2.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem AS NMS_TrnElem_2 INNER JOIN
                                                   CDN.PrcKarty AS PrcKarty_2 ON NMS_TrnElem_2.E_Oper1 = PrcKarty_2.Prc_GIDNumer
                            WHERE      (NMS_TrnElem_2.E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [OP suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, CDN.MagNag.MaN_Data3, 
                      CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Ułożył' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                              FROM         NMS_TrnElem AS NMS_TrnElem_1
                              WHERE     (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) PrcKarty_2.Prc_Imie1 + CHAR(32) + PrcKarty_2.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem AS NMS_TrnElem_2 INNER JOIN
                                                   CDN.PrcKarty AS PrcKarty_2 ON NMS_TrnElem_2.E_Oper1 = PrcKarty_2.Prc_GIDNumer
                            WHERE      (NMS_TrnElem_2.E_WmNr = CDN.MagElem.MaE_GIDNumer)) <> ''
UNION ALL
SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) PrcKarty_1.Prc_Imie1 + CHAR(32) + PrcKarty_1.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1 INNER JOIN
                                                   CDN.PrcKarty AS PrcKarty_1 ON NMS_TrnElem_1.E_Oper2 = PrcKarty_1.Prc_GIDNumer
                            WHERE      (NMS_TrnElem_1.E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1
                            WHERE      (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS [OP suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, CDN.MagNag.MaN_Data3, 
                      CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Ułożył' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) E_OperSuma AS [Suma operatorów]
                              FROM         NMS_TrnElem AS NMS_TrnElem_1
                              WHERE     (E_WmNr = CDN.MagElem.MaE_GIDNumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) PrcKarty_1.Prc_Imie1 + CHAR(32) + PrcKarty_1.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnElem AS NMS_TrnElem_1 INNER JOIN
                                                   CDN.PrcKarty AS PrcKarty_1 ON NMS_TrnElem_1.E_Oper2 = PrcKarty_1.Prc_GIDNumer
                            WHERE      (NMS_TrnElem_1.E_WmNr = CDN.MagElem.MaE_GIDNumer)) <> ''
UNION ALL
SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS [OP  suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Zatwierdził' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                              FROM         NMS_TrnNag INNER JOIN
                                                    NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                              WHERE     n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) <> ''
UNION ALL
SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper1 = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS [OP  suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, 
                      CDN.MagNag.MaN_Data3, CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Zatwierdził' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                              FROM         NMS_TrnNag INNER JOIN
                                                    NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                              WHERE     n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper1 = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) <> ''
UNION ALL
SELECT     man_data3, 'Wydanie' AS [Typ dokumentu], 'WM-' + LTRIM(STR(CDN.MagNag.MaN_TrNNumer)) + '/' + CDN.MagNag.MaN_TrNSeria + '/' + RIGHT(STR(CDN.MagNag.MaN_TrNRok), 2) 
                      + '/' + CDN.Magazyny.MAG_Kod AS Dokument, CDN.Magazyny.MAG_Kod AS Magazyn, CDN.TwrKarty.Twr_Kod AS [Kod towaru], CDN.TwrKarty.Twr_Nazwa AS [Nazwa towaru], 
                      CDN.TwrKarty.Twr_WagaBrutto AS [Towar waga brutto], CDN.MagElem.MaE_Ilosc AS Ilość, CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)), 2) AS decimal(18, 2)) AS [Ilość / operator], CAST(ROUND(CDN.MagElem.MaE_Ilosc /
                          (SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                            WHERE      n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) * CDN.TwrKarty.Twr_WagaBrutto, 2) AS decimal(18, 2)) AS [Waga / operator],
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper2 = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS [Imię i nazwisko],
                          (SELECT     TOP (1) N_OperSuma
                            FROM          NMS_TrnNag
                            WHERE      n_opersuma <> 0 AND (N_WmNr = mae_gidnumer)) AS [OP  suma], CDN.MagElem.MaE_GIDNumer, CDN.MagElem.MaE_TwrKod, DATEADD(day, CDN.MagNag.MaN_Data3, 
                      CONVERT(DATETIME, '1800-12-28', 120)) AS Data, 
                      (CASE WHEN twr_kod LIKE 'U%' THEN 'Usługa' ELSE (CASE Twr_Typ WHEN '1' THEN 'Towar' WHEN '2' THEN 'Produkt' WHEN '3' THEN 'Usługa' END) END) AS TYP, 'Zatwierdził' AS Rodzaj, 
                      CAST(1 AS float) / CAST
                          ((SELECT     TOP (1) NMS_TrnNag.N_OperSuma
                              FROM         NMS_TrnNag INNER JOIN
                                                    NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO
                              WHERE     n_opersuma <> 0 AND (NMS_TrnElem.E_WmNr = mae_gidnumer)) AS float) AS [Pozycji / operator], CDN.MagNag.MaN_GIDNumer
FROM         CDN.Magazyny INNER JOIN
                      CDN.MagNag ON CDN.Magazyny.MAG_GIDNumer = CDN.MagNag.MaN_MagDNumer INNER JOIN
                      CDN.MagElem INNER JOIN
                      CDN.TwrKarty ON CDN.MagElem.MaE_TwrNumer = CDN.TwrKarty.Twr_GIDNumer ON CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer AND 
                      CDN.MagNag.MaN_GIDNumer = CDN.MagElem.MaE_GIDNumer
WHERE     (CDN.MagNag.MaN_GIDTyp = 1601) AND
                          (SELECT     TOP (1) CDN.PrcKarty.Prc_Imie1 + CHAR(32) + CDN.PrcKarty.Prc_Nazwisko AS [Imię i nazwisko]
                            FROM          NMS_TrnNag INNER JOIN
                                                   NMS_TrnElem ON NMS_TrnNag.N_Id = NMS_TrnElem.E_IdO INNER JOIN
                                                   CDN.PrcKarty ON NMS_TrnNag.N_Oper2 = CDN.PrcKarty.Prc_GIDNumer
                            WHERE      (NMS_TrnElem.E_WmNr = mae_gidnumer)) <> ''
