SELECT     [Typ dokumentu], Dokument, Magazyn, [Kod towaru], [Nazwa towaru], [Towar waga brutto], SUM(Ilość) AS Expr1, SUM([Ilość / operator]) AS [Ilość / operator], SUM([Waga / operator]) 
                      AS [Waga / operator], [Suma operatorów], [Imię i nazwisko], Data, TYP, Rodzaj, [Pozycji / operator], [Data  clarion], GIDNumer
FROM         dbo.NMS_V_BI_WM
WHERE     ([Data  clarion] > 78033)
GROUP BY [Kod towaru], [Typ dokumentu], Dokument, Magazyn, [Nazwa towaru], [Towar waga brutto], [Suma operatorów], [Imię i nazwisko], Data, TYP, Rodzaj, [Pozycji / operator], [Data  clarion], GIDNumer
