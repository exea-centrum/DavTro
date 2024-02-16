<?xml version="1.0" standalone="yes"?>
<Setup>
  <Settings>
     <connection_string>Data Source=79.187.xx.xxx;Initial Catalog=CDNXL_DavTro;Persist Security Info=True;User ID=sa;Password=xxxxxx</connection_string>
     <!-- kolumna 0 - kod, kolumna 1 - nazwa, ilosc do prod, jm, zlcenie serwisowe id, zlecenie-zasob id-->
     <!-- jezeli zlecenie serwisowe jest =0 to PW na akronim bez ZRD-->
   <sql>  
          SELECT     CDN.TwrKarty.Twr_Kod, Twr_nazwa, CDN.ProdZasoby.PZA_Ilosc-rez_zrealizowano, twr_jm, PZL_Id,  pza_id,
     rez_ilosc,
     CDN.NumerDokumentu(14343,0,0,ProdZlecenia.PZL_Numer,ProdZlecenia.PZL_Rok,ProdZlecenia.PZL_Seria,ProdZlecenia.PZL_Miesiac) NumerDokumnetuPZL
     FROM         CDN.ProdZlecenia INNER JOIN
                      CDN.ProdProcesy ON CDN.ProdZlecenia.PZL_Id = CDN.ProdProcesy.PPC_Zlecenie INNER JOIN
                      CDN.ProdCzynnosci ON CDN.ProdProcesy.PPC_Id = CDN.ProdCzynnosci.PCZ_Proces INNER JOIN
                      CDN.ProdZasoby ON CDN.ProdCzynnosci.PCZ_Id = CDN.ProdZasoby.PZA_Czynnosc INNER JOIN
                      CDN.TwrKarty ON CDN.ProdZasoby.PZA_TwrNumer = CDN.TwrKarty.Twr_GIDNumer AND CDN.ProdZasoby.PZA_TwrTyp = CDN.TwrKarty.Twr_GIDTyp inner join
                      cdn.Rezerwacje on rez_zrdTyp=14346 and rez_zrdNumer=pza_id
     WHERE     (CDN.ProdZasoby.PZA_TypZasobu = 0)  {filtrSql}
     and exists (select * from cdn.Atrybuty inner join Cdn.AtrybutyKlasy on atk_id=atr_atkId and atk_nazwa='Data rozpoczecia produkcji'
     where atr_obiTyp=14343 and atr_obiNumer=pzl_id and atr_wartosc!='')
     and not exists (select * from cdn.Atrybuty inner join Cdn.AtrybutyKlasy on atk_id=atr_atkId and atk_nazwa='Data zakonczenia produkcji'
     where atr_obiTyp=14343 and atr_obiNumer=pzl_id and atr_wartosc!='')
     </sql>
     <input_mode>ean</input_mode> <!-- ean - odczyt | list - lista wg SQL -->
     <sa_password>sqlsa01-!</sa_password>
     <zebra_printer_name>Samsung</zebra_printer_name>
     <port>com3</port>
     <doc_type>PW</doc_type>
     <akronim>00076</akronim>
     <atrybut_numer_walka>Nr walka</atrybut_numer_walka>
     <atrybut_data_produkcji>Data rozpoczecia produkcji</atrybut_data_produkcji>
     <atrybut_data_zakonczenia_produkcji>Data zakonczenia produkcji</atrybut_data_zakonczenia_produkcji>
     <atrybut_dostawa>Nr partii</atrybut_dostawa>
     <waga_przelicznik_do_kg>1</waga_przelicznik_do_kg>
<url>http://79.187.xx.xxx/darXL/</url>
<checkbox>1</checkbox>
<offline>0</offline>
<elana>1</elana>
  </Settings>

</Setup>