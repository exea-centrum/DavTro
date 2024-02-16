W taki sposób powinieneś łączyć się do tabeli Ilości

KOD: ZAZNACZ CAŁY

 declare @StanNaDzien datetime = '2019-02-19'

 SELECT Twr_Kod, ISNULL(TwI_Ilosc,0) Ilosc
 FROM CDN.Towary A  LEFT OUTER JOIN CDN.TwrIlosci B ON B.TwI_TwIId =
(SELECT TOP 1 IL.TwI_TwIId From CDN.TwrIlosci IL Where IL.TwI_TwrId =
A.Twr_TwrID And IL.TwI_MagId Is Null And IL.TwI_Data <=
Convert(DATETIME,@StanNaDzien,120) ORDER BY IL.TwI_Data DESC)