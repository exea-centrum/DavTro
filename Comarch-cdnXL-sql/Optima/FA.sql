select
TrN_TrNID,
TrN_NumerPelny,TrN_NumerPelny,TrN_DataDok,TrN_PodNazwa1,TrN_RazemNetto,TrN_WartoscZakupu,
TrN_RazemNettoWal,TrN_KursL,TrE_TwrNazwa,TrE_TwrKod,TrE_TwrSWW,TrE_Cena0,TrE_CenaT,TrE_Ilosc,TrE_WartoscNetto,TrE_WartoscZakupu,TrE_WartoscNettoWal,Twr_WagaKG,
(Twr_WagaKG* TrE_Ilosc) as waga
from CDN.TraNag
left join CDN.TraElem on TrN_TrNID = TrE_TrNId
inner join [CDN].[Towary] on Tre_twrid=twr_twrid
where TrN_TypDokumentu = '302' and TrN_DataDok BETWEEN '2020-04-01'
AND '2020-04-30'
/*(select sum(Tre_Ilosc*Twr_WagaKG) from [CDN].[TraElem] inner join
[CDN].[Towary] on Tre_twrid=twr_twrid and tre_trnid=A.trn_trnid)*/
/*TrN_DataDok ='2020-02-01 00:00:00'
and TrN_Bufor = 1
and (select top 1 TwI_Ilosc from CDN.TwrIlosci where convert(date,
TwI_Data) <= convert(date, getdate()) and TwI_TwrId = TrE_TwrId) >=
TrE_Ilosc
group by TrN_TrNID, TrN_NumerPelny*/