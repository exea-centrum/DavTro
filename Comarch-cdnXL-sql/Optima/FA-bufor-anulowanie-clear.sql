UPDATE cdn.tranag
SET TrN_Bufor=1
WHERE TrN_NumerObcy='3/3030'
/*select * from cdn.tranag where TrN_NumerObcy='3/3030'*/

*UPDATE cdn.tranag
SET TrN_Bufor=1
WHERE TrN_NumerObcy='238460'*/
select * from cdn.tranag where TrN_NumerObcy='238460'






update cdn.tranag set trn_bufor=1 where trn_numerpelny='FA/2016/4570'
update cdn.tranag set trn_anulowany=0 where trn_numerpelny='FA/2016/4570'

/*UPDATE cdn.tranag
SET TrN_RazemVAT=-263.25
WHERE TrN_NumerObcy='2/2020'*/
select * from cdn.tranag where TrN_NumerObcy='2/2020'

UPDATE cdn.tranag
SET TrN_RazemBruttoWal=-332.50
WHERE TrN_NumerObcy='2/2020'
select * from cdn.tranag where TrN_NumerObcy='2/2020'



select * from cdn.traVat
where TrV_TrNID='2343'
/*UPDATE cdn.TraVat
SET TrV_Flaga=2
WHERE TrV_TrNID='2343'*/

select * from cdn.traelem
/*where TrN_numerpelny = ' FA/12/12/2020'*/
where TrE_TrNID='2343'
/*select * from cdn.traVat
where TrV_TrNID='2343'*/
/*UPDATE cdn.traelem
SET TrE_Flaga=2
WHERE TrE_TrNID='2343'*/

*UPDATE cdn.tranag
SET TrN_NumerObcy='FV/6484/20'
WHERE TrN_TrNID = '2399'*/
/*select * from cdn.tranag where TrN_NumerObcy='FV/6484'*/
select * from cdn.tranag where TrN_TrNID in ('2398','2399')



/*select * from CDN.Kontrahenci WHERE Knt_Nip in ('879270xxxx', '879268xxxx', '879269xxx')*/
UPDATE cdn.Kontrahenci
SET Knt_NipKraj='PL',Knt_KrajISO='PL'
WHERE Knt_KrajISO='0'
/*WHERE Knt_Nip='879270xxxxx','879268xxxx','87926xxxx'*/



/*UPDATE cdn.tranag
SET TrN_DataKur='2020-05-11 00:00:00'
WHERE TrN_TrNID='1221'*/
/*UPDATE cdn.tranag
SET TrN_Bufor=1
WHERE TrN_NumerObcy='240612'*/
select * from cdn.tranag where TrN_NumerObcy='240612'




declare @StanNaDzien datetime = '2021-02-19'

 SELECT *, Twr_Kod, ISNULL(TwI_Ilosc,0) Ilosc
 FROM CDN.Towary A  LEFT OUTER JOIN CDN.TwrIlosci B ON B.TwI_TwIId =
(SELECT TOP 1 IL.TwI_TwIId From CDN.TwrIlosci IL Where IL.TwI_TwrId = A.Twr_TwrID And IL.TwI_MagId Is Null And IL.TwI_Data <= Convert(DATETIME,@StanNaDzien,120) ORDER BY IL.TwI_Data DESC)






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
