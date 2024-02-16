OPT057 – Strojenie wydajnościowe baz MS SQL dla Comarch ERP Optima

Data aktualizacji: 28-11-2018


Spis treści

Wprowadzenie

Planowanie instalacji

Dobór konfiguracji sprzętowej dla serwera bazy danych
Edycje serwera SQL

Konfiguracja serwera SQL

Minimalna i Maksymalna ilość wykorzystywanej pamięci RAM
Inne parametry

Diagnoza problemów wydajnościowych

Optymalizacja dużych baz danych

Wyszukiwanie brakujących indeksów
Database Engine Tuning Advisor

Cykliczne czynności administracyjne

Maintenance Plan – zautomatyzowane strojenie dla pełnych wersji MS SQL
Plan serwisowy dla bezpłatnych wersji MS SQL

Pliki do pobrania


Wprowadzenie

Serwer bazy danych jest centralnym miejscem dla całej instalacji
Comarch ERP Optima i ma bardzo duże znaczenie dla wydajnej jej pracy.
Dlatego bardzo ważne jest odpowiednie skonfigurowanie serwera zarówno
pod względem sprzętowym, doboru właściwego oprogramowania oraz jego
ustawień. Dodatkowo z biegiem czasu i działalnością klienta spływają
nowe dane słownikowe oraz dokumenty, co powoduje przyrost bazy danych.
Ważne jest więc monitorowanie stanu serwera SQL i odpowiednie
reagowanie w celu zapewnienia jak najlepszej wydajności.

Niniejszy biuletyn zawiera wytyczne dla konfiguracji serwera bazy
danych dedykowanego do pracy z Comarch ERP Optima. Przedstawiono w nim
również podstawowe metody diagnozy problemów wydajnościowych oraz
sposoby optymalizacji. W ostatnim rozdziale znajduje się obszerny opis
cyklicznych czynności administracyjnych, których celem jest utrzymanie
serwera SQL w dobrej kondycji. Do biuletynu dołączone są skrypty,
które pozwalają zautomatyzować cykliczne czynności administracyjne dla
wersji Express serwera SQL.

Planowanie instalacji

Dobór konfiguracji sprzętowej dla serwera bazy danych

Serwer bazy danych jest wrażliwym elementem, którego awaria może
spowodować przestój całej firmy oraz duże straty finansowe, dlatego
warto zainwestować w markowy, sprawdzony sprzęt. Taki serwer w
atrakcyjnych cenach można np. nabyć w ramach Zintegrowanej Oferty
Comarch.

Konfiguracja sprzętowa

Przy doborze serwera bazy danych należy zwrócić szczególną uwagę to,
aby zapewniał on niezawodną pracę i bezpieczeństwo przechowywanych
danych. Dlatego warto, aby jak najwięcej komponentów było nadmiarowych
usuwając pojedyncze ogniwa awarii. Czyli dobrze jest zastosować
podwójne zasilacze oraz zasilanie awaryjne (UPS) pozwalające na
prawidłowe zamknięcie systemu w momencie braku prądu.
Jeżeli chodzi o wydajność to przede wszystkim należy zwrócić na ilość
pamięci RAM oraz szybkość podsystemu dyskowego. Procesor zwykle
odgrywa mniejsze znaczenie. Jednakże powinien zawierać rdzenie nowej
generacji (Intel Nehalem lub lepszy) i taktowaniu przynajmniej 2 GHz.
Im więcej dostępnej pamięci tym lepiej, oczywiście ze względu na
koszty, jej ilość musi być dobrana do zapotrzebowania, bazując na
wielkości instalacji, czyli ilości użytkowników, wielkości baz danych
oraz ich ilości. Orientacyjne ilości pamięci RAM dla różnych
konfiguracji zostały podane w Podręczniku konfiguracji dla bieżącej
wersji Comarch ERP Optima. Później oczywiście należy obserwować
liczniki serwera i sprawdzać, czy nie ma potrzeby jej zwiększenia.
Informacje na temat przykładowych liczników, na które warto zwrócić
uwagę podano w punkcie 4. Diagnoza problemów wydajnościowych.
Podsystem dyskowy powinien być zabezpieczony przed awariami poprzez
odpowiednią konfigurację. Zalecana konfiguracja to przynajmniej Raid 1
(mirror) dla wolumenu obsługującego system oraz w miarę możliwości
Raid 10 dla wolumenu przechowującego dane. Dodatkowo należy zwrócić
uwagę, aby kontroler dyskowy posiadał podtrzymywanie bateryjne, które
umożliwia zastosowanie opcji write-back przyspieszającej działanie
podsystemu dyskowego.
Najczęściej przyjmowaną jednostką wydajności podsystemu dyskowego jest
IOPS[1] (ang. Input/Output Operations Per Second, IOPS), czyli ilość
operacji wejścia wyjścia na sekundę. Jako operację wejścia/ wyjścia
rozumie się odczyt lub zapis fragmentu danych, najczęściej o rozmiarze
4 kB.

Poniżej znajdują się orientacyjne dane dotyczące wydajności różnych
podsystemów dyskowych:

DyskOrientacyjna wartość IOPS[2]
Dysk Sata 5400~50-80
Dysk Sata 7200 ~75-100
Dysk SAS 10k~140
Dysk SAS 15k~175-210
Dysk SSD~400-1000000[3]

Wymagania co do podsystemu dyskowego zależą od wielkości instalacji to
znaczy wielkości bazy oraz ilości równoczesnych użytkowników.

Jako zgrubną zasadę można przyjąć, że dla mniejszych baz danych (<2
GB) należy zarezerwować około 15-25 IOPS dla użytkownika. Natomiast
dla większych baz (> 2 GB) dla jednego użytkownika należy przeznaczyć
25-40 IOPS lub więcej.

Jak widać Rozwiązaniem godnym polecenia jest zastosowanie dysków SSD.
Przy czym należy pamiętać o zabezpieczeniu ich przed awarią np.
poprzez konfigurację RAID 1. Bardziej szczegółowe informacje dotyczące
określenia wymagań aplikacji do podsystemu dyskowego można znaleźć w
poniższym odnośniku:
http://msdn.microsoft.com/en-us/library/ee410782(v=sql.100).aspx

Porównanie wydajności pracy Comarch ERP Optima z dyskami SSD i SATA
znajduje się w biuletynie technicznym: OPT076 – Porównanie wydajności
HDD vs SSD w Comarch ERP Optima.pdf, który jest dostępny na
Indywidualnych Stronach Partnerów
(https://www.erp.comarch.pl//partnerzy/default.aspx).

Biura rachunkowe:

Kilka mniejszych baz danych słabiej obciąża serwer niż jedna duża.
Dlatego przy skalowaniu serwera SQL dla biura rachunkowego należy
przede wszystkim sprawdzić jaka będzie wielkość największej bazy
danych i pod nią dobierać konfigurację plus zabezpieczyć dodatkową
ilość pamięci RAM współmiernie do ilości baz danych. Raczej nie należy
przekraczać ilości 50 baz danych o wielkości do 200 MB na rdzeń
procesora.

Edycje serwera SQL

Bardzo duże znaczenie dla wydajnej pracy serwera SQL jest właściwe
dobranie edycji serwera SQL. Comarch ERP Optima jest dystrybuowana z
darmową serwera SQL o nazwie Express. Edycja ta posiada określone
ograniczenia co do możliwości wykorzystania zasobów komputera, na
którym jest zainstalowana. Szczegóły znajdują się w poniższej tabeli.

EdycjaMaksymalna ilość pamięci RAM (dla puli buforów)Maksymalna
wielkość bazy danychIlość obsługiwanych procesorów
SQL 2008 Express1 GB*4 GB1
SQL 2008 R2 Express1 GB*10 GB1
SQL 2012 / 2014 Express1 GB*10 GB1 (maksymalnie 4 rdzenie)
SQL 2008 R2 Workgroup3 GBBez ograniczeń (524 PB)2
SQL 2008 R2 Standard64 GBBez ograniczeń (524 PB)4
SQL 2012 Standard / BI64 GBBez ograniczeń (524 PB)4 procesory (do 16 rdzeni)
SQL 2014 Standard / BI128 GBBez ograniczeń (524 PB)4 procesory (do 16 rdzeni)

Źródło: http://www.microsoft.com/sqlserver/en/us/product-info/compare.aspx
*Badania niezależne od Producenta pokazują, że wersja Express może
wykorzystać maksymalnie 1,4 GB RAM
(http://sqlgeek.pl/2010/08/23/pl-sql-server-limity-w-sql-server-2008-r2-express-edition/)

Architektura 32 bit, a 64 bit.

Obecnie obowiązującą architekturą jest architektura 64 bitowa i w
miarę możliwości zalecana jest aktualizacja do niej środowisk 32
bitowych, które posiadają ograniczenia związane z ilością adresowanej
pamięci, a także różnymi komplikacjami w jej alokacji. W podstawowej
konfiguracji proces 32 bitowy może maksymalnie zaadresować 2 GB
pamięci, przy zastosowaniu specjalnego przełącznika można tą wartość
zwiększyć do 3 GB, ale dzieje się to kosztem ilości dostępnej
przestrzeni adresowej dla systemu operacyjnego dlatego należy robić to
ostrożnie. Serwer SQL może dodatkowo wykorzystać mechanizm AWE, który
pozwala na systemach 32 bitowych wyjść poza zakres 4 GB pamięci.
Szczegóły można znaleźć w archiwalnym biuletynie technicznym
OPT041-Wydajność Comarch OPT!MA a procesory wielordzeniowe i 64
bitowe, który jest dostępny na stronach walidowanych.
Na systemach 64 bitowych warto zwrócić uwagę, aby instalować również
serwer SQL w wersji 64 bitowej ponieważ jego 32 bitowy odpowiednik
będzie w stanie wykorzystać jedynie 4 GB z dostępnej pamięci nawet w
edycji Standard.
Więcej informacji na temat możliwości wykorzystania pamięci
operacyjnej przez poszczególne wersje systemów operacyjnych Windows
można znaleźć tutaj:
http://msdn.microsoft.com/en-us/library/windows/desktop/aa366778(v=vs.85).aspx

Konfiguracja serwera SQL

Większość parametrów serwera SQL należy pozostawić bez zmian, ponieważ
domyślne wartości są optymalne dla większości warunków pracy.
Sugerujemy jednakże zwrócić uwagę na
Maksymalną / Minimalna ilość wykorzystywanej pamięci RAM.

Minimalna i Maksymalna ilość wykorzystywanej pamięci RAM>

Parametr minimalnej i maksymalnej ilości wykorzystanej pamięci RAM
odnosi się wyłącznie do jednego z komponentów serwera SQL, czyli puli
buforów. Jest to kluczowy element jednakże, przy rezerwowaniu pamięci
dla puli buforów należy wziąć pod uwagę również inne składniki samego
serwera SQL jak i samego systemu operacyjnego.

Minimum Server Memory

Domyślną wartością parametru Minimum Server Memory jest zero, co
oznacza, że serwer będzie dynamicznie zarządzał dostępną pamięcią RAM
dla puli buforów. Ustawienie tego parametru powyżej zera oznacza, że
serwer SQL nie będzie mógł zwolnić tej pamięci w razie potrzeby. Z
drugiej strony w środowisku, gdzie pracuje więcej aplikacji prócz
samego serwera SQL może być konieczne zarezerwowanie niezbędnego
minimum pamięci, ponieważ niemożność zaalokowania niezbędnego minimum
spowoduje konieczność korzystania z pliku wymiany na dysku twardym i
znaczną degradację wydajności Serwera SQL. Na komputerach dedykowanych
do pracy tylko z serwerem SQL zaleca się pozostawienie domyślnej
wartości tego parametru.

Maximum Server Memory

Domyślna wartością tego parametru to: 2147483647 MB, co oznacza że
Server SQL będzie chciał zająć całą dostępną pamięć na komputerze.
Może to niestety prowadzić do spadku wydajności całego środowiska
poprzez to, że pula buforów zajmie pamięć potrzebną do działania
systemu operacyjnego lub innych komponentów serwera SQL. Dlatego
zaleca się ograniczenie tej pamięci rezerwując niezbędną przestrzeń do
działania systemu operacyjnego i pozostałych elementów serwera SQL
(oraz ewentualnie dla dodatkowych aplikacji pracujących na tym
systemie).

Ustawienia pamięci dla instancji Microsoft SQL Server

Poniżej znajdują się sugestie ustawień parametru Maximum Server Memory
(przy założeniu, że na serwerze nie pracują dodatkowe aplikacje oraz
inne moduły serwera SQL takie jak wyszukiwanie pełnotekstowe, analizy
czy raporty). Dane te oczywiście dotyczą wersji, które nie posiadają
wbudowanych ograniczeń tak jak wersja Express. Dla wersji Express
biorąc pod uwagę wcześniej podane informacje można ustawić Maximum
Server Memory na 1400 MB.

Pamięć fizycznaMaximum Server Memory
2 GB1500 MB
4 GB3200 MB
6 GB4800 MB
8 GB6400 MB
12 GB10000 MB
16 GB13500 MB
24 GB21500 MB

Źródło: http://www.sqlservercentral.com/blogs/glennberry/2009/10/29/suggested-max-memory-settings-for-sql-server-2005_2F00_2008/

Inne parametry

Optimize for Ad hoc Workloads

Włączenie parametru „Optimize for Ad hoc Workloads” pozwala na lepsze
wykorzystanie dostępnej pamięci RAM w sytuacji, gdy na serwerze
generowane jest wiele zapytań, które nigdy więcej lub bardzo rzadko są
uruchamiane ponownie. Parametr ten powoduje, że plany dla zapytań „ad
hoc” nie są zapisywane w pamięci podręcznej do późniejszego
wykorzystania. Zapisywany jest tylko ich mały fragment, cały plan jest
zapisywany dopiero przy powtórnym wykonaniu tego samego zapytania. W
ten sposób oszczędzana jest pamięć RAM, przez co może być ona
wykorzystana przez serwer SQL do innych celów, a co za tym idzie
zwiększa się jego wydajność.

Zaawansowane właściwości serwera SQL – włączony parametr Optimize for
Ad hoc Workloads

Zaleca się włączenie tego parametru przy pracy z Comarch ERP Optima.
Opcja ta jest dostępna od wersji SQL 2008.

Zajętość pamięci planów dla zapytań można sprawdzić poniższym zapytaniem:

select objtype,
count(*) as number_of_plans,
sum(cast(size_in_bytes as bigint))/1024/1024 as size_in_MBs,
avg(usecounts) as avg_use_count
from sys.dm_exec_cached_plans
group by objtype

Poniższy wynik wskazuje, że plany typu „Adhoc” zajmują 1439 MB
pamięci, co jest stosunkowo dużą wartością więc warto włączyć opcję
„Optimize for ad hoc workloads”.

Za pomocą komendy:

DBCC FREESYSTEMCACHE('SQL Plans')

można wyczyścić pamięć podręczną planów dla planów typu Adhoc.

Diagnoza problemów wydajnościowych

Temat diagnozy wydajności serwera SQL jest bardzo obszerny, jednakże
poniżej wybrano kilka podstawowych wskaźników, które warto sprawdzić,
gdy występują problemy wydajnościowe.
Wszystkie poniższe wskaźniki dostępne są z poziomu systemu operacyjnego.
Narzędzia administracyjne \ Monitor wydajności

Nazwa parametruZalecane wartościZalecane działania
Procesor: Czas procesora [%]< 80%Jeżeli wartość tego parametru
przynajmniej kilka razy dziennie na dłuższy czas przekracza zalecaną
wartość należy zaplanować dołożenie drugiego procesora lub jego
wymianę na wydajniejszy
System: Processor Queue Lenght< 2 (dla rdzenia)Jeżeli wartość tego
parametru przynajmniej kilka razy dziennie na dłuższy czas przekracza
zalecaną wartość należy zaplanować dołożenie drugiego procesora lub
jego wymianę na wydajniejszy
Pamięć: Strony/s< 20Zbyt mała ilość dostępnej pamięci RAM
Pamięć: Dostępne bajty> 300Zbyt mała ilość dostępnej pamięci RAM
Dysk fizyczny: Czas dysku [%] (poddzielone przez ilość dysków)<
55%Wysoka wartość tego parametru może wskazywać na nie wystarczająco
szybki podsystem dyskowy lub zbyt małą ilość dostępnej pamięci RAM.
Dysk fizyczny: Średnia długość kolejki dysku (podzielone przez ilość
dysków)< 2Wysoka wartość tego parametru może wskazywać na nie
wystarczająco szybki podsystem dyskowy lub zbyt małą ilość dostępnej
pamięci RAM.

(najlepiej w okolicach zera)
SQL Server Buffer: Buffer Cache Hit Ratio> 90%Zbyt mała ilość
dostępnej pamięci RAM dla serwera SQL

(najlepiej w granicach 99%)
Page life expectancy> 300Zbyt mała ilość dostępnej pamięci RAM dla serwera SQL

Zbyt mała ilość dostępnej pamięci dla serwera SQL może wynikać z
poniższych czynników:

Za mało pamięci w serwerze
Ograniczenia wersji Express
Nieprawidłowo skonfigurowany parametr Max Server Memory
Ograniczenia architektury 32 bitowej

Importy dużych dokumentów poprzez pracę rozproszoną lub inne
mechanizmy mogą na dłuższy czas blokować dostęp do tabel, a przez co
powodować wydłużenie czasu operacji dla pozostałych użytkowników.
Dlatego zaleca się, aby szczególnie duże importy były wykonywane poza
godzinami pracy innych użytkowników.
Jeżeli jakiś scenariusz działania okazuje się szczególnie wolny
prosimy o opisanie go krok po kroku i zgłoszenie go przez System
Obsługi Zgłoszeń (SOZ).

Optymalizacja dużych baz danych

Program jest dostosowany do pracy w większości warunków, jednakże
niektóre szczególnie duże bazy ze względu na specyficzny rozkład
danych w tabelach mogą wymagać dodatkowej optymalizacji. Za duże bazy
danych uważamy te, które mają rozmiar rzędu kilku gigabajtów lub
więcej. Przed przystąpieniem do poniższych czynności dobrze upewnić
się, czy serwer jest prawidłowo skonfigurowany i posiada odpowiednią
ilość zasobów.

Wyszukiwanie brakujących indeksów

Microsoft SQL Server posiada wbudowane mechanizmy, które pozwalają
określić orientacyjnie jakich indeksów może brakować. W tym celu można
uruchomić na serwerze następujące zapytanie:

select d.*
, s.avg_total_user_cost
, s.avg_user_impact
, s.last_user_seek
,s.unique_compiles
from sys.dm_db_missing_index_group_stats s
,sys.dm_db_missing_index_groups g
,sys.dm_db_missing_index_details d
where s.group_handle = g.index_group_handle
and d.index_handle = g.index_handle
order by s.avg_user_impact desc
go

Źrodło: http://www.google.pl/url?sa=t&rct=j&q=performance_tuning_waits_queues.doc&source=web&cd=1&ved=0CFkQFjAA&url=http%3A%2F%2Fdownload.microsoft.com%2Fdownload%2F4%2F7%2Fa%2F47a548b9-249e-484c-abd7-29f31282b04d%2FPerformance_Tuning_Waits_Queues.doc&ei=IrjYT__PAcXk4QSOxJzRAw&usg=AFQjCNFRIebSlMLnry8gH99CQklhdmokJw

Zapytanie to najlepiej uruchomić po dłuższej pracy użytkowników
wykonujących swoje zadania z Comarch ERP Optima w szczególności w
obszarach, gdzie zauważają problemy wydajnościowe. Należy pamiętać, że
dane o brakujących indeksach są usuwane po restarcie serwera SQL.
Przykładowy wynik powyższego zapytania (pominięto kilka kolumn, aby
zachować czytelność).

Po pierwsze patrzymy na kolumny avg_user_impact oraz
avg_total_user_cost, podają one zysk jaki można uzyskać przy
zastosowaniu danego indeksu. Pierwszy z nich avg_user_impact wskazuje
na procentową poprawę w zmniejszeniu kosztu wykonania zapytań
użytkownika . Drugi natomiast avg_total_user_cost podaje całkowity
zysk w koszcie wykonywanych przez użytkownika zapytań.
Należy mieć również świadomość, że podejście to ma również swoje
ograniczenia. Najbardziej istotne z nich jest takie, że podane dane
należy traktować jako sugestię, a nie jako konieczność. Pozostałe
ograniczenia podane są tutaj:
http://msdn.microsoft.com/en-us/library/ms345485(v=sql.105).aspx

Poniżej znajduje się skrypt używany przez Dział Wsparcia Microsoft:
(http://msdn.microsoft.com/en-us/library/ms345421.aspx)

PRINT 'Missing Indexes: '
PRINT 'The "improvement_measure" column is an indicator of the
(estimated) improvement that might '
PRINT 'be seen if the index was created. This is a unitless number,
and has meaning only relative '
PRINT 'the same number for other indexes. The measure is a combination
of the avg_total_user_cost, '
PRINT 'avg_user_impact, user_seeks, and user_scans columns in
sys.dm_db_missing_index_group_stats.'
PRINT ''
PRINT '-- Missing Indexes --'
SELECT CONVERT (varchar, getdate(), 126) AS runtime,
mig.index_group_handle, mid.index_handle,
CONVERT (decimal (28,1), migs.avg_total_user_cost *
migs.avg_user_impact * (migs.user_seeks + migs.user_scans)) AS
improvement_measure,
'CREATE INDEX missing_index_' + CONVERT (varchar,
mig.index_group_handle) + '_' + CONVERT (varchar, mid.index_handle)
+ ' ON ' + mid.statement
+ ' (' + ISNULL (mid.equality_columns,'')
+ CASE WHEN mid.equality_columns IS NOT NULL AND
mid.inequality_columns IS NOT NULL THEN ',' ELSE '' END + ISNULL
(mid.inequality_columns, '')
+ ')'
+ ISNULL (' INCLUDE (' + mid.included_columns + ')', '') AS
create_index_statement,
migs.*, mid.database_id, mid.[object_id]
FROM sys.dm_db_missing_index_groups mig
INNER JOIN sys.dm_db_missing_index_group_stats migs ON
migs.group_handle = mig.index_group_handle
INNER JOIN sys.dm_db_missing_index_details mid ON mig.index_handle =
mid.index_handle
WHERE CONVERT (decimal (28,1), migs.avg_total_user_cost *
migs.avg_user_impact * (migs.user_seeks + migs.user_scans)) > 10
ORDER BY migs.avg_total_user_cost * migs.avg_user_impact *
(migs.user_seeks + migs.user_scans) DESC
PRINT ''
GO

Przygotowuje on od razu definicję indeksu wraz z przykładową nazwą
sortując indeksy po polu „miara poprawy”, które jest wyliczane biorąc
pod uwagę wspomniane wcześniej kolumny: avg_total_user_cost,
avg_user_impact, oraz dodatkowo user_seeks i user_scans z
sys.dm_db_missing_index_group_stats.

Uwaga

Należy przygotować skrypt dodający oraz usuwający dodawane indeksy,
ponieważ dodatkowe indeksy uniemożliwią wykonanie konwersji do nowej
wersji programu. Po skonwertowaniu bazy można na nowo dodać
przygotowane indeksy

Uwaga

Dodane indeksy mogą mieć negatywny wpływ na operacje dodawania,
aktualizowania i usuwania rekordów w bazie, dlatego należy
przetestować ich wpływ na całościowe funkcjonowanie programu.

Database Engine Tuning Advisor

Pełne wersje Microsoft SQL Server posiadają dodatkowe narzędzie o
nazwie Database Engine Tuning Advisor. Pozwala ono również na dodanie
brakujących indeksów na podstawie zapisanego wcześniej ruchu SQL. Ruch
ten można zapisać za pomocą innego narzędzia Microsoft SQL Server
Profiler, które również jest dostępne w pełnej wersji serwera SQL.
W skrócie proces optymalizacji można przedstawić w poniższych krokach:

Zapis ruchu za pomocą Microsoft SQL Server Profiler
Przygotowanie optymalizacji w Database Engine Tuning Advisor
Zapis rekomendacji
Przygotować plik usuwający dodatkowe indeksy i statystyki
Utworzenie dodatkowych indeksów i statystyk

Zapis ruchu za pomocą Microsoft SQL Server Profiler

Po wyborze nowego trace’a należy wskazać szablon Tuning, zaleca się
zapisać plik od razu na dysk i ograniczyć jego rozmiar np. do 100 MB.
Zaznaczony domyślnie parametr Enable file rollover powoduje utworzenie
nowego pliku po osiągnięciu zadanego limitu. Zbyt duże pliki znacząco
zwiększają czas analizy przez Database Engine Tuning Advisor.

Przygotowanie optymalizacji w Database Engine Tuning Advisor

Po zakończeniu zapisu ruchu przechodzimy do Database Engine Tuning Advisor.
Na pierwszej zakładce „General” nowej sesji wskazujemy plik (File)
jako źródło ruchu do optymalizacji oraz podajemy bazę do analizy. Na
drugiej zakładce „Tuning Options” pozostawiamy domyślne parametry.

W celu uruchomienia analizy klikamy ikonę Start Analysis (menu Actions
\ Start Analysis)

Zapis rekomendacji

Po zakończonej analizie otrzymujemy szacowany wzrost wydajności oraz
rekomendacje co do założenia dodatkowych indeksów i statystyk.
Przygotowane rekomendacje należy zapisać w pliku poprzez przejście do
menu Action \ Save Rekommendations.
Z tak przygotowanych rekomendacji można wybrać kilka lub wszystkie
indeksy i statystyki, jednakże należy pamiętać, że każdy dodatkowy
indeks będzie spowalniał operacje dodawania, aktualizowania i usuwania
rekordów w tabeli, której on dotyczy. Następnie wybrane indeksy i
statystyki należy zapisać w skrypcie nadając im nazwy, które będą
łatwe do identyfikacji. Na koniec należy również przygotować skrypt,
który będzie usuwał niestandardowe indeksy i statystyki, ponieważ
trzeba je usuwać przed przystąpieniem do konwersji bazy danych. Po
zakończeniu konwersji można je ponownie dodać.

Uwaga

Należy przygotować skrypt dodający oraz usuwający dodawane indeksy,
ponieważ dodatkowe indeksy uniemożliwią wykonanie konwersji do nowej
wersji programu. Po skonwertowaniu bazy można na nowo dodać
przygotowane indeksy.

Uwaga

Dodane indeksy mogą mieć negatywny wpływ na operacje dodawania,
aktualizowania i usuwania rekordów w bazie, dlatego należy
przetestować ich wpływ na całościowe funkcjonowanie programu.

Cykliczne czynności administracyjne

Cykliczne czynności administracyjne są bardzo istotne z punktu
widzenia bezpieczeństwa jak i wydajności serwera SQL i należy
traktować je jako obowiązkowe, a nie opcjonalne.
Do najważniejszych czynności administracyjnych można zaliczyć:

Kopia bezpieczeństwa
Cykliczne odtwarzanie kopii bezpieczeństwa w celu weryfikacji
poprawności backupu.
Optymalizacja indeksów
Kontrola poprawności baz danych DBCC CHECKDB

Dla wydajności szczególnie dla większych baz duże znaczenie ma
cykliczna optymalizacja indeksów w bazie, które ze względu na swoją
defragmentację będą spowalniać pracę Comarch ERP Optima.
W kolejnych podrozdziałach opisano w jaki sposób można zautomatyzować
niektóre z wymienionych czynności administracyjnych.

Maintenance Plan – zautomatyzowane strojenie dla pełnych wersji MS SQL

Każda pełna wersja MS SQL posiada mechanizm automatyzacji procesów,
których zadaniem jest optymalizowanie bazy danych oraz kreowanie kopii
bezpieczeństwa. Raz skonfigurowany zestaw operacji nazywany
Maintenance Plan’em, czyli planem serwisowym, może być wielokrotnie
uruchamiany w zadanym czasie. Tworzony jest zatem pewien „automat”,
który o konkretnej porze wykona za nas operacje, które można wykonać z
interfejsu programu Comarch ERP Optima.
W niniejszym podrozdziale przedstawiony został przykład planu
serwisowego obejmującego:

Sprawdzenie spójności i ciągłości bazy danych (element testów integralności)
Odbudowę indeksów (ikona pioruna na oknie listy baz danych w konfiguracji)
Aktualizację statystyk
Wykonanie kopii bezpieczeństwa bazy konfiguracyjnej oraz firmowej
Usunięcie plików powstałych na potrzeby wykonywania planu

Materiał został sporządzony przy pomocy MS SQL 2008 za pomocą
kreatora. Dla wcześniejszych wersji silnika bazy danych postępuje się
podobnie.

Krok 1 – Uruchomienie kreatora Maintenance Plan’u

Kreator uruchamiany jest z poziomu programu Management Studio (pełna wersja).
SQL Server /Management/Maintenance Plan Wizard

Krok 2 – Wskazanie nazwy planu oraz terminu jego wykonywania

Kolejnym oknem kreatora, na które natrafiamy, jest krótki opis
możliwości samego kreatora. Możemy zaznaczyć opcję, aby nie pokazywało
się ono następnym razem. Interesuje nas następne okno.

Wypełniamy w nim pola odpowiadające za nazwę oraz opis planu.
Deklarujemy następnie jego ramy czasowe. Mamy dwie możliwości:
„Seperate schedule for each task” – opcja pozwala na ustalenie terminu
wykonania dla każdej operacji planu osobno.
„Single schedule for entire plan or no schedule” – opcja pozwala na
ustalenie terminu wykonania całego planu lub wykonania go na życzenie
(on demand).
Naciskając przycisk „Change” przechodzimy do okna konfiguracji ram czasowych.

Poniższy obraz przedstawia wybór ram czasowych dla opisywanego przykładu.

Istnieją cztery kombinacje ram czasowych dla planu. Mamy zatem:

„Start automatically (…)” – plan uruchomi się tuż po uruchomieniu
serwera oraz usługi SQL Agent
„Start whenever when CPU (…)” – plan uruchomi się, kiedy procesor nie
będzie obciążony
„Recurring” – plan ustala się według interwałów rok / miesiąc / dzień
„On time” – plan wykona się tylko raz w zadanym dniu i godzinie

W przykładzie użyjemy opcji terminarza według interwału co tydzień. Na
obrazku widać, iż ma wykonywać się w każdy piątek o godzinie 18:30.
Plan ma rozpocząć się od 15 grudnia 2009 roku i ma nie mieć końca.

Plan ma symulować koniec tygodnia roboczego, kiedy po godzinie 18:00
wszyscy pracownicy skończyli pracę, a serwer SQL nie jest już niczym
obciążony.

Poprawne wskazanie ram czasowych dla planu jest bardzo istotne.
Uruchomienie go podczas szczytu aktywności pracowników może nawet
uniemożliwić im pracę. Podczas optymalizacji serwer pobiera dużo
zasobów sprzętowych oraz blokuje elementy struktury bazy danych.

Krok 3 – wskazanie składników planu serwisowego

Kolejne okno kreatora planu przedstawia zakres czynności, jakie można
wykonać. Są to:

„Check Database Inegrity” – kontrola poprawności struktury bazy
danych. Nie można mylić jej z testami integralności, które walidują
poprawność samych danych.
„Shrink Database” – pomniejszenie wielkości bazy danych poprzez
usunięcie już niepotrzebnej rezerwy. Serwer SQL podczas pracy alokuje
nowe zasoby na potrzeby przyszłych danych oraz operacji. Nie usuwa
natomiast powstałem w tej sposób nadwyżki, kiedy dane zostaną usunięte
a operacja się zakończy. Shrink pozwala na uwolnienie tych danych.
Należy jednak pamiętać o tym, iż usunięcie nadmiarowych danych
skutkuje fragmentacją dysku i może negatywnie wpływać na wydajność
SQL. Nie zaleca się shrinkowania bazy danych tuż po wykonaniu odbudowy
indeksów. Może to przynieść efekt odwrotny od zamierzonego.
„Reorganize Index” – defragmentacja indeksów.
„Rebuild Index” – odbudowa indeksów na nowo. Operacja ta jest bardziej
długotrwała aniżeli defragmentacja, lecz daje lepsze efekty.
„Update Statistics” – aktualizacja “query optimizer’a” dzięki której
serwer będzie potrafił wydajniej wykonywać polecenia.
„Clean Up History” – usuwanie historii wykonywania i odtwarzania kopii
baz danych.
„Execute SQL Server Agent Job” – wykonanie “Job’a”.
„Back Up Database” – wykonanie kopi bezpieczeństwa bazy danych.
„Maintenance Cleanup Task” – usunięcie plików powstałych podczas
wykonywania planu.

Poniższy obraz przedstawia wybór opcji, które realizowane są w
opisywanym przykładzie.

Krok 4 – wskazanie kolejności wykonywania składników planu serwisowego

Kolejne okno kreatora planu pozwala na zadecydowanie, w jakiej
kolejności powinny wykonać się poszczególne składniki planu
serwisowego.

Krok 5 – wskazanie baz danych dla każdego elementu planu serwisowego

Każdy element planu serwisowego można wykonać dla dowolnego zestawu
baz danych. Naszym celem będzie baza konfiguracyjna i baza firmowa.
Krok ten pozwala na elastyczność podczas tworzenia planu dla serwera
przechowującego dużą ilość baz danych. Każdej z nich można przypisać
oddzielne punkty planu.
Ogólna zasada wyboru baz danych jest wspólna dla wszystkich elementów
planu serwisowego. Możemy wybrać:

„All databases” – operacja zostanie wykonana na wszystkich bazach
danych znajdujących się na serwerze.
„System databases” – operacja zostanie wykonana tylko dla systemowych
baz danych (przykład nie zakłada żadnych optymalizacji na tym typie
baz danych).
„All user databases” – operacja zostanie wykonana tylko dla baz danych
użytkownika, czyli niesystemowych. Dzięki tej opcji mamy pewność, iż
zoptymalizujemy wszystkie bazy danych i nie narazimy na
niebezpieczeństwo bazy systemowe.
„These databases” – operacja zostanie wykonana tylko dla zaznaczonych
baz danych. Opisywany przykład wykorzystuję tę opcję.
„Ignore databases (…)” – wszystkie te bazy danych, których stan nie
jest „Online” nie będą podlegać optymalizacji.

Poniższy obraz przedstawia wybór baz danych poddawanych sprawdzaniu
poprawności. Każde kolejne okno opiera się na podobnym wyborze.

Krok 6 – charakterystyczne opcje dla każdego elementu planu serwisowego

Podczas wskazywania, które bazy danych mają zostać zoptymalizowane,
możemy ustalić pewne opcje charakterystyczne dla elementu planu
serwisowego.
Dla elementów wykorzystanych w przykładzie mamy:

Check Database Inegrity
-Include indexes – po odznaczeniu proces kontroli nie obejmie
indeksów, zajmie więc mniej czasu.
Rebuild Index
-Reorganize pages with the default amount of free space – odbudowa
indeksów z domyślnym
“fill factor”. Oznacza to, iż indeksy zostaną odbudowane zgodnie z
ustawieniami zadanymi podczas kreowana bazy danych, czyli przewidziane
przez Comarch.
-Change free space per page percentage to … – wskazanie wartości “fill
factor” samodzielnie.
-Sort results in tempdb – zastosowanie SORT_IN_TEMPDBoption.
-Keep index online while reindexing – podczas odbudowy indeksy będą
możliwe do odczytu (ta opcja dostępna jest dla edycji Enterprise)
Update Statistics
-Update: – wybór elementów poddanych aktualizacji.
-Scan type: – zakres elementów poddanych aktualizacji.
Back Up Database
-Sekcja „Create a backup file for every database” – opcje związane z
katalogiem, w którym zostaną umieszczone pliki kopii zapasowych.
Maintenance Cleanup Task
-Dostępne opcje pozwalają na zadecydowanie jaki typ danych
historycznych ma podlegać kasowaniu. Wskazuje się albo pewien plik,
albo folder. Określa się również wymagany wiek pliku.

Krok 7 – wskazanie sposobu raportowania wyników wykonania planu
serwisowego oraz zakończenie pracy z kreatorem.

Ostatnim etapem tworzenia planu serwisowego jest wskazanie ścieżki
dostępu dla pliku raportu. Zawiera on zestawienie podjętych czynności
oraz wyniki ich działania.
Po zakończeniu kreatora, nowy plan znajduje się na liście Maintenance
Plans w programie Management Studio.

Na tym etapie kończy się konfiguracja planu serwisowego. Wykona się w
następny piątek o godzinie 18:30.
Szerszy opis wszystkich elementów Maintenance Plan’u w języku
angielskim można uzyskać na stronie:
http://msdn.microsoft.com/en-us/library/ms188981.aspx

Plan serwisowy dla bezpłatnych wersji MS SQL

Opisany wcześniej plan serwisowy zbudować można tylko dla płatnych
wersji silnika bazy danych. Nic nie stoi jednak na przeszkodzie, aby
samemu sporządzić podobną funkcjonalność i zaproponować ją klientowi.
Podobny efekt uzyskamy poprzez sporządzenie:

Skryptu SQL, który zawierał będzie wszystkie potrzebne dla
optymalizacji zapytania.
Skryptu JS/VBS lub pliku .bat, który będzie zdalnie uruchamiał skrypt
SQL z poziomy konsoli.
Harmonogramu systemu Windows, w którym zawrze się ramy czasowe planu.


W niniejszym biuletynie technicznym załączone zostały dwa pliki:

StrojenieBazy.sql
StrojenieBazCDN.sql

Plik StrojenieBazy.sql to skrypt zawierający wszystkie niezbędne
zapytania, aby przeprowadzić plan tożsamy
z wcześniej opracowanym Maintenance Plan’em. Przed użyciem należy
zmodyfikować w nim dwa parametry:

SET @Nazwa_bazy = ‚CDN_DEMO’ — Tu wpisz nazwę bazy danych do optymalizacji
SET @Sciezka = N’C:\BACKUP\’ — Tu wpisz ścieżkę dostępu do katalogu
dla kopii baz

Skrypt optymalizuje tylko jedną, wybraną bazę danych. Został tak
sporządzony dla łatwiejszego zrozumienia jego działania. Warto
prześledzić jego strukturę.

Drugi skrypt o nazwie StrojenieBazCDN.sql wymaga wskazania ścieżki
dostępu do katalogu dla kopii baz. Zastosowano w nim kursor
wyszukujący wszystkie bazy danych, których nazwa zaczyna się od ‘CDN’.
Dla każdej z nich przeprowadzona zostanie optymalizacja.

Przed uruchomieniem skryptu należy zmodyfikować w nim następujące elementy:

sqlcmd.exe -S SERWER -E -i D:\StrojenieBazCDN.sql -o C:\Backup

SERWER – nazwa serwera, na którym znajdują się bazy danych.
D:\StrojenieBazCDN.sql – ścieżka dostępu oraz nazwa skryptu SQL.
C:\Backup – ścieżka docelowego miejsca składowania kopii baz danych
(katalog musi istnieć).

Aby uruchomić automatyczne wykonywanie planu serwisowego należy w
harmonogramie systemu Windows utworzyć nową regułę, która będzie w
zadanym czasie uruchamiać odpowiedni skrypt VBS. Tym sposobem uzyskamy
ten sam efekt, jaki przynieść może Maintenance Plan.

Pliki do pobrania

StrojenieBazy.sql
StrojenieBazCDN.sql


________________________________

OPT042 – Dodatkowe możliwości filtrowania list w programie

Data aktualizacji: 28-11-2018


Spis treści

Teoria i przykłady praktyczne

Panel filtra zaawansowanego
Zakładka [Ogólne]
Zakładka [Zaawansowane]
Zakładka [Opcje]
Zapamiętywanie ustawień filtra
Przykłady z instrukcją tworzenia

Pozostałe przykłady

Ogólne
Kasa/Bank
Handel i Faktury
CRM
Obieg Dokumentów
Księgowość i Środki Trwałe
Płace i Kadry


Teoria i przykłady praktyczne

Panel filtra zaawansowanego

Filtr jest narzędziem wspomagającym przeszukiwanie list. W wielu
miejscach systemu pojawiają się różnego rodzaju listy, do których
można stosować filtry. Filtrowanie listy powoduje zawężenie ilości
elementów wyświetlanych na liście do takich, które spełniają warunki
filtra. Panel filtra można stosować na dwa sposoby:

Proste filtrowanie
Filtr zaawansowany


We wszystkich przypadkach list, które mogą być filtrowane, panel
filtra zaawansowanego znajduje się na dole listy. Po prawej stronie
wiersza filtra znajdują się zawsze przyciski do włączania i wyłączania
działania filtra –Filtruj, Wyczyść filtr oraz przycisk do tworzenia
warunków filtrujących filtra zaawansowanego Konstruktor filtra.

Jeżeli pinezka (widoczna obok ikony filtrowania – lejka) jest:
wyłączona – wówczas po zmianie filtrowania na ikonie lejka pojawia się
znak zapytania i dopiero po jego kliknięciu uruchomione zostanie
filtrowanie. Ten tryb pracy jest efektywniejszy gdy lista zwiera
bardzo dużo pozycji. Można wtedy najpierw ustawić wszystkie parametry
filtrowania, a dopiero na końcu uruchomić samo przefiltrowanie listy.
włączona – wszystkie zmiany filtrowania wykonywane są na bieżąco i od
razu widoczne są na liście.

Filtr zaawansowany pozwala filtrować listę według stworzonych przez
Użytkownika warunków. Filtry zaawansowane są zapamiętywane w systemie.
Nazwa filtra zaawansowanego jest poprzedzona znakiem „#”. Do tworzenia
filtra zaawansowanego służy Konstruktor filtra , uruchamiany z
dowolnego okna, w którym istnieje możliwość zastosowania filtra.
Praca z konstruktorem filtra wymaga pewnej znajomości struktury baz
danych oraz umiejętności formułowania warunków logicznych.
Nazwa – nazwa filtra. Po zapisaniu filtra wpisana w tym polu nazwa
zostanie poprzedzona znakiem „#”. Filtr pod tą nazwą będzie zapisany w
zbiorze dostępnych filtrów dla danej listy. Zbiór filtrów
przyporządkowanych do danej listy może być dowolnie modyfikowany tzn.
można dodawać, poprawiać i usuwać zdefiniowane filtry.

Zakładka [Ogólne]

Zakładka [Ogólne] zawiera mechanizm łatwego konstruowania
rozbudowanego wyrażenia logicznego filtrującego listę. W rozbudowanej
postaci warunek logiczny może składać się z wielu członów połączonych
operatorami logicznymi „oraz” (AND), „lub” (OR), „oraz nie” (AND Not)
i „lub nie” (OR Not). W konstruktorze filtra tworzy się proste warunki
logiczne, a następnie łączy się je za pomocą dostępnych operatorów.

Konstruktor filtra – zakładka Ogólne

Tworzenie pojedynczego wyrażenia filtra zaczyna się od dodania warunku
(po kliknięciu w domyślny operator Oraz wybieramy opcję Dodaj warunek
lub obok wciskamy przycisk). Następnie w warunku kliknięcie na
domyślnie podstawione pierwsze pole z bazy danych rozwija listę z
wyborem dostępnych pól. Nie trzeba znać dokładnie nazw pól czy
struktury bazy – po prawej stronie listy znajduje się opis
(komentarz).

Konstruktor filtra – lista dostępnych pól z bazy danych

Dostęp do pól zorganizowany jest za pośrednictwem list rozwijanych. W
zależności od tego, dla jakiej listy tworzony jest filtr (z poziomu
którego okna został wywołany konstruktor filtra), lista dostępnych pól
jest różna. Przykładowo, jeżeli konstruktor filtra zostanie wywołany z
okna Kontrahenci – wówczas dostępne będą pola związane z kartoteką
kontrahenta.
Za każdym razem Użytkownik otrzymuje zestaw dostępnych pól odpowiedni
do danej listy. Dzięki temu, chcąc tworzyć własne filtry, nie musi
znać całej bazy danych. Może się ograniczyć do znajomości struktury
kilku tabel, w oparciu o które będzie budował własne filtry. Po
wyborze pola należy wybrać odpowiedni operator porównania
z listy. Lista pojawi się po kliknięciu na domyślnie wyświetlany operator.

Konstruktor filtra – dostępne operatory warunkujące

Inaczej mówiąc, należy przyrównać wybrane pole do ustalonej z góry
wartości stałej lub do parametru, którego wartość będzie pobierana w
momencie uruchamiania filtra. Wartość do której będzie odbywało się
przyrównanie wpisujemy po kliknięciu w pole . Tworzenie wyrażenia może
odbywać się także w oknie Edycja wyrażenia filtra, które uruchamia się
po kliknięciu w pole , a następnie przycisku plusa po prawej stronie .

Po wywołaniu okna Edycja wyrażenia filtra należy podać wartość szukaną
dla tego pola. Jeżeli wartość szukana ma być pobierana w momencie
uruchomienia filtra to należy zaznaczyć pole wyboru Pytaj o wartość.
Następnie w polu Tytuł należy wpisać opis pobieranej wartości. W ten
prosty sposób tworzy się filtry z parametrem. Poniżej przedstawione
zostało okno z pytaniem o parametry filtra. Okno pojawia się
automatycznie po uruchomieniu filtra z parametrem.

Edycja wyrażenia filtra

Logiczna reprezentacja utworzonego w ten sposób wyrażenia filtrującego
jest wyświetlana w dolnej części okna po zaakceptowaniu Edycji
wyrażenia filtra.

Zakładka [Zaawansowane]

Zakładka [Ogólne] konstruktora filtra pozwala na łatwe budowanie
wyrażeń filtrujących, posiada on jednak pewne ograniczenia. Dla
bardziej wymagających Użytkowników została zaprojektowana zakładka
[Zaawansowane]. Można tu ręczne tworzyć warunek filtrujący. Zakładka
[Zaawansowane] posiada pole, do którego wprowadzany jest filtr w
postaci wyrażenia z użyciem składni języka SQL. Praca z konstruktorem
filtra wymaga znajomości struktury baz danych oraz umiejętności
formułowania warunków logicznych.

Uwaga
Aby zobaczyć listę zdefiniowanych filtrów należy przycisnąć klawisz
CTRL razem z LEWYM KLAWISZEM MYSZY na przycisku Konstruktor filtra.
Lista ta obsługiwana jest przez standardowe przyciski i klawisze
umożliwiające dodawanie, edytowanie i kasowanie filtrów.
Konstruktor filtra – zakładka Zaawansowane

Jeżeli zachodzi potrzeba utworzenia warunku, aby filtr działał jedynie
na wybranej bazie firmowej, na początku treści filtra należy wpisać:

'DEMO' = {_QGetSQL('select SYS_Wartosc from cdn.SystemCDN where SYS_ID =1')}
po tym warunku po operatorze „AND” należy wprowadzić właściwą treść
filtra. W powyższym warunku na początku jako argument (w powyższym
przykładzie „DEMO”) należy podać nazwę bazy wyświetlaną na liście
firm.

Zakładka [Opcje]

Zakładka [Opcje] zawiera typ filtra. Domyślnym typem jest filtr
Stanowiska. Jego definicja jest zapisywana w rejestrze systemowym i
filtr stanowiska będzie widoczny dla danego stanowiska.

Definicja filtra Globalnego jest zapisywana w bazie danych, dzięki
czemu jest on widoczny i dostępny do edycji dla wszystkich
Użytkowników.

Filtr może być dostępny tylko dla wybranego operatora po zaznaczeniu
opcji Operator i wybraniu odpowiedniego operatora. Po zalogowaniu się
operator będzie miał możliwość wyboru filtra z listy filtrów.

Filtr może być Obowiązkowy dla danego operatora, co oznacza, że po
zalogowaniu się tego operatora filtr będzie włączony i nie będzie
widoczny (do wyboru) na liście filtrów. Dodatkowo należy zaznaczyć w
menu System/ Konfiguracja/ Program/ Użytkowe/ Parametry – parametr
Stosuj filtry obowiązkowe.

Parametr Chroniony – jeśli zaznaczy go operator z uprawnieniami
Administratora, wówczas inni operatorzy nie będą mieli możliwości
edycji i usunięcia danego filtra.

Parametr Domyślny można zaznaczyć dla danego filtra niezależnie od
jego typu (Stanowiska/ Operatora/ Globalny/ Obowiązkowy). Zaznaczenie
parametru powoduje, że filtr jest automatycznie stosowany przy wejściu
na daną listę. W odróżnieniu od filtra obowiązkowego można go
wyłączyć. Filtrów domyślnych dla danej listy może być wiele, ale przy
otwieraniu listy zostanie wybrany tylko jeden z nich. Kryterium wyboru
wyznacza typ filtra oraz kolejność filtra w ramach typu. Najwyższy
priorytet mają filtry Stanowiska, a więc związane z danym komputerem.
Jeśli na jednym lub kilku filtrach typu Użytkownika, podłączonych do
danej listy, zostanie zaznaczony parametr Domyślny, ostatni z nich
zostanie uznany jako domyślny. W przypadku braku domyślnego filtra
Stanowiska przeszukiwane są filtry Operatora, a wybór filtra
domyślnego następuje analogicznie jak poprzednio. Jeśli na danej
liście nie ma zdefiniowanego ani filtra domyślnego Stanowiska ani
Operatora – domyślny filtr jest szukany w filtrach Globalnych.

Konstruktor filtra – zakładka Opcje

Zapamiętywanie ustawień filtra

Po zamknięciu listy zapamiętywanie ustawień filtra jest realizowane wg
poniższych zasad:

zapamiętywane jest czy panel dodatkowy był zwinięty/rozwinięty,
zapamiętywane jest czy pinezka była włączona/wyłączona,
zapamiętywane są ustawienia pól z panelu podstawowego i rozwijanego,
lista otwiera się wyfiltrowana wg zapamiętanych filtrów.


Ponadto przy pierwszym uruchomieniu listy pinezka jest włączona, a
dostępna opcja Wyczyść filtr na liście oraz Reset ustawień okien
przywraca ustawienia domyślne dla filtrów panelu podstawowego i
rozwijanego.

Odświeżanie listy odbywa się przy każdorazowym użyciu lejka lub oraz
poprzez wciśnięcie F5 w dowolnym miejscu na liście.

Filtry zapisywane są do bazy konfiguracyjnej, więc odtworzenie bazy
konfiguracyjnej powoduje przywrócenie wszystkich filtrów, które
zostały do niej dodane. Inną możliwością przeniesienia filtrów do
innej instalacji jest skopiowanie treści filtra z zakładki
[Zaawansowane] Konstruktora filtra i wklejenie jej w tym samym miejscu
w innej instalacji Comarch ERP Optima. Istotne jest, aby Konstruktor
filtra był uruchomiony z poziomu tej samej listy.

Przykłady z instrukcją tworzenia

Moduły Handlowo-Magazynowe

Filtry tworzone z poziomu zakładki [Ogólne]

Na liście Faktur Sprzedaży chcemy wyświetlić tylko te dokumenty,
których wartość brutto jest pomiędzy 500 a 1000 PLN. W konstruktorze
filtra, zakładka [Ogólne] w pole Nazwa wpisujemy wybraną nazwę filtra,
następnie w celu dodania warunków klikamy ikonę plusa i wskazujemy
pole TrN_RazemBrutto.

Określamy dla niego warunek „Jest większe niż” oraz kwotę 500
Następnie analogicznie dodajemy kolejny warunek, w którym określamy
TrN_RazemBrutto „Jest mniejsze niż” 1000. Zapisujemy filtr ikoną .
Po zapisie jest on widoczny na liście filtrów dostępnych z poziomu
listy Faktur Sprzedaży.

Filtry tworzone z poziomu zakładki [Zaawansowane]

Z poziomu listy Faktur Sprzedaży do bazy danych wysyłane jest
automatycznie zapytanie:

SELECT [lista kolumn] FROM A.TraNag WHERE …

Alias „A” dla tabeli TraNag, który jest widoczny w powyższym
przykładzie pozwala na tworzenie bardziej skomplikowanych zapytań przy
użyciu wielu tabel. Dla różnych list aliasy mogą być różne – można je
podejrzeć za pomocą zaawansowanych narzędzi do obsługi serwera SQL.
W treści filtra zaawansowanego wpisujemy wyrażenie SQL, które
następuje po WHERE w zapytaniu.

Prosty filtr zaawansowany
Dla filtra przedstawionego we wcześniejszym przykładzie dla zakładki
[Ogólne] można zbudować bezpośrednie zapytanie w zakładce
[Zaawansowane], które wyglądałoby tak:

(TrN_RazemBrutto > '500.0000' AND TrN_RazemBrutto < '1000.0000')

Jest to filtr o analogicznym działaniu, pokazujący Faktury Sprzedaży,
których wartość brutto zawiera się między 500 a 1000 PLN.

Filtr zaawansowany z parametrem dynamicznym
W przykładzie pokażemy jak wyfiltrować dokumenty handlowo-magazynowe,
które wystawił określony operator.
Id operatora, który wystawił dany dokument znajduje się w bazie w
tabeli TraNag w polu TrN_OpeZalID. W filtrze musimy porównać wartość
tego pola z ID operatora wybranego. Potrzebny będzie parametr
dynamiczny. Stworzymy go klikając prawym przyciskiem myszy w polu
Filtr SQL i wybierając opcję Wstaw/edytuj deklarację parametru
dynamicznego.

Pojawi się kreator, który poprowadzi nas przez kolejne kroki, w których:

wskazujemy nazwę parametru, której użyjemy potem w zapytaniu (np. OpeID)
wybór typów parametru:


Parametr typu lista wywoływana
– jeśli wybierzemy typ – lista wywoływana – dla tego typu parametrów
pojawia się pewien zakres gotowych procedur, z których możemy wybrać
np. opcje: lista kontrahentów, lista kategorii, lista grup, lista
towarów itp. Wybieramy z tej listy procedurę lista operatorów, która
wyświetli listę akronimów operatorów, a po wyborze konkretnego
operatora zwróci jego ID i przekaże w parametrze OpeID.

Po zatwierdzeniu kolejnych okien deklaracja parametru wygląda w ten sposób:

@PAR ?@LS20(OP_PROC.DLL|CALLLOOKUPOPELISTA())|OpeID|&OpeID:{}@? PAR@

Wywołanie parametru w zapytaniu wstawiamy jak pokazano poniżej:

TrN_OpeZalID = ??OpeID

Umożliwi to wybór z listy operatorów wybranego operatora i
przefiltrowanie dokumentów po określonym operatorze. Filtr pokazuje
dokumenty WYSTAWIONE przez danego operatora. Aby filtr reagował na
dokumenty ZMODYFIKOWANE przez operatora należy zmienić TrN_OpeZalID na
TrN_OpeModID

Parametr typu lista rozwijana
Jeśli chcielibyśmy w parametrze zastosować listę rozwijaną, wówczas w
kolejnym kroku kreatora pojawi się szablon zapytania, które należy
uzupełnić:

SELECT ID = 1, Kod = ''

W tym miejscu powinno znaleźć się zapytanie, które zwróci nam ID oraz
KOD. KOD będzie wyświetlany na liście rozwijanej, natomiast po
dokonaniu wyboru z tej listy – do parametru będzie przekazywane ID
wyboru.

SELECT ID = Ope_OpeId, Kod = Ope_Kod From {OPBK()}.CDN.Operatorzy
Order By Ope_Kod

Lista operatorów znajduje się w tabeli CDN.Operatorzy w bazie
konfiguracyjnej, dlatego konieczne jest odwołanie w podany sposób:

{OPBK()}.CDN.Operatorzy

Ostatecznie filtr z parametrem z listą rozwijaną będzie wyglądał w ten sposób:

@PAR ?@R(SELECT ID = Ope_OpeId, Kod = Ope_Kod From
{OPBK()}.CDN.Operatorzy Order By Ope_Kod)|OpeID|&OpeID:{}@? PAR@
TrN_OpeZalID = ??OpeID

Należy pamiętać o tym, aby w definicji parametru dynamicznego użyć
kolumny liczbowej (w tym przypadku TrN_OpeZalID).

Funkcje systemowe
Modyfikacją zaprezentowanego filtra może być taki filtr, który pokaże
dokumenty aktualnie zalogowanego operatora. W tym celu można
wykorzystać funkcje systemowe. Opcja dostępna pod prawym przyciskiem
myszy:

Spośród listy dostępnych funkcji możemy wybrać funkcję OperatorID,
która zwróci ID zalogowanego operatora:

Ostatecznie filtr z użyciem funkcji systemowej będzie wyglądał tak:

TrN_OpeZalID = {OperatorID}

Moduły Księgowe

Filtry tworzone z poziomu zakładki [Ogólne]

Na liście zapisów kasowych/bankowych chcemy wyświetlić zapisy, na
których nie zostało uzupełnione konto przeciwstawne.
W konstruktorze filtra, zakładka [Ogólne] w pole Nazwa wpisujemy
wybraną nazwę filtra, następnie w celu dodania warunków klikamy ikonę
plusa i wskazujemy pole Bzp_KontoPrzeciwstawne.

Określamy dla niego warunek „Jest puste”.
Następnie zapisujemy filtr ikoną .
Po zapisie jest on widoczny na liście filtrów dostępnych z poziomu
listy zapisów kasowych/bankowych.

Filtry tworzone z poziomu zakładki [Zaawansowane]

Filtr zaawansowany z parametrem dynamicznym
W przykładzie pokażemy jak wyfiltrować dokumenty w rejestrze VAT,
które posiadają określoną kategorię w nagłówku dokumentu.
Id kategorii, która została wybrana na dokumencie w rejestrze VAT
znajduje się w bazie w tabeli VatNag w polu VaN_KatID.
W filtrze musimy porównać wartość tego pola z ID operatora wybranego.
Potrzebny będzie parametr dynamiczny. Stworzymy go klikając prawym
przyciskiem myszy w polu Filtr SQL i wybierając opcję Wstaw/edytuj
deklarację parametru dynamicznego.

Pojawi się kreator, który poprowadzi nas przez kolejne kroki, w których:

wskazujemy nazwę parametru, której użyjemy potem w zapytaniu (np. Kategoria)
wybór typów parametru:


Parametr typu lista wywoływana
– jeśli wybierzemy typ – lista wywoływana – dla tego typu parametrów
pojawia się pewien zakres gotowych procedur, z których możemy wybrać
np. opcje: lista kontrahentów, lista kategorii, lista grup, lista
towarów itp.
Wybieramy z tej listy procedurę lista kategorii, która wyświetli listę
kategorii, a po wyborze konkretnej kategorii zwróci jego ID i przekaże
w parametrze kategoria.

Po zatwierdzeniu kolejnych okien deklaracja parametru wygląda w ten sposób:

@PAR ?@LS0(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:0|@? PAR@

Wywołanie parametru w zapytaniu wstawiamy jak poniżej:

VaN_KatId = ??Kategoria

Umożliwi to wybór z listy kategorii wybranej kategorii i
przefiltrowanie dokumentów po określonej kategorii wybranej w nagłówku
dokumentu w rejestrze VAT. Należy pamiętać o tym, aby w definicji
parametru dynamicznego użyć kolumny liczbowej (w tym przypadku
VaN_KatId).

Moduły Płace i Kadry

Filtry tworzone z poziomu zakładki [Ogólne]

Na liście pracowników w kadrach chcemy wyświetlić osoby, dla których
została odnotowana informacja na temat wieloetatowości, a konkretnie
posiadają ustawiony etat podstawowy.
W konstruktorze filtra, zakładka [Ogólne] w pole Nazwa wpisujemy
wybraną nazwę filtra, następnie w celu dodania warunków klikamy ikonę
plusa i wskazujemy pole PRI_Nadrzedny.

Określamy dla niego warunek „Jest równe” oraz podajemy wartość 1.
Następnie zapisujemy filtr ikoną .
Po zapisie jest on widoczny na liście filtrów dostępnych z poziomu
listy pracowników.

Filtry tworzone z poziomu zakładki [Zaawansowane]


Filtr zaawansowany z parametrem dynamicznym
W przykładzie pokażemy jak odfiltrować pracowników, którzy posiadają
przypisaną określoną kategorię.
Id kategorii, która została przypisana pracownikowi na jego formularzu
kadrowym (zakładka 7 [Dodatkowe]) znajduje się w bazie w tabeli
PracEtaty w polu PRE_KatId.
W filtrze musimy porównać wartość tego pola z wartością wybraną z
listy słownikowej wszystkich kategorii. Potrzebny będzie parametr
dynamiczny. Stworzymy go klikając prawym przyciskiem myszy w polu
Filtr SQL i wybierając opcję Wstaw/edytuj deklarację parametru
dynamicznego.

wskazujemy nazwę parametru, której użyjemy potem w zapytaniu (np. Kategoria)
wybór typów parametru:


Parametr typu lista rozwijana
– jeśli wybierzemy typ – lista rozwijana – dla tego typu parametrów
należy zdefiniować odpowiednie zapytanie SQL podając w zapytaniu dwa
pobierane pola z czego pierwsze musi być numeryczne (identyfikator) a
drugie tekstowe (opis).

Należy pamiętać o tym, aby w definicji parametru dynamicznego użyć
kolumny liczbowej (w tym przypadku PRE_KatId).

Pozostałe przykłady

Uwaga
Nowo dodane przykłady filtrów oznaczone są kolorem zielonym na liście.

Ogólne

Jak ustawić w filtrze datę bieżącą lub zakres dat, np. od pierwszego
do ostatniego dnia miesiąca?

Aby po zdefiniowaniu filtrów, w których pada pytanie o datę lub zakres
dat podpowiadała się data bieżąca, a nie data z dnia definiowania
filtra, należy skorzystać z parametru dynamicznego. Na zakładce
[Zaawansowane] w Konstruktorze filtra należy zdefiniować odpowiednie
parametry dynamiczne (prawy klawisz myszy na polu z filtrem,
Wstaw/edytuj deklarację parametru dynamicznego, potem, żeby go
wykorzystać: Wstaw/edytuj odwołanie do parametru dynamicznego).
Przykładowy filtr (zakres dat na bieżący miesiąc) w polu Filtr SQL
powinien mieć wpisane:

@PAR ?@D17|data1|&Data od:{DateClwFirstDay('m')} @? PAR@ @PAR
?@D17|data2|&Data do:{DateClwLastDay('m')} @? PAR@ TrN_DataDok >=
??data1 AND TrN_DataDok <= ??data2

Jak zawęzić listę kontrahentów do tych, których kod rozpoczyna się na
zadaną literę?

Taki filtr może być przydatny przy seryjnym generowaniu Not
odsetkowych, Ponagleń Zapłaty czy Potwierdzeń Salda, które jest
dostępne z menu Ogólne/ Kontrahenci, pod ikoną Generacja na pasku
zadań.
W Konstruktorze filtra, na zakładce [Zaawansowane] należy wpisać w
polu Filtr SQL:

Knt_Kod LIKE ?@S100|Kod zaczyna się od:'' + '%'

Aby odfiltrować dokumenty Ponagleń zapłaty lub Potwierdzeń salda dla
kontrahentów, których kod rozpoczyna się od zadanej litery, należy:
W Konstruktorze filtra, na zakładce [Zaawansowane] należy wpisać w
polu Filtr SQL:

exists (select * from CDN.Kontrahenci where BDN_PodmiotID=Knt_KntId
AND Knt_Kod LIKE ?@S100|Kod zaczyna się od:'' + '%')

Dla listy Not odsetkowych w polu Filtr SQL:

exists (select * from CDN.Kontrahenci where NON_PodmiotID=Knt_KntId
AND Knt_Kod LIKE ?@S100|Kod zaczyna się od:'' + '%')

Jak wyfiltrować kontrahentów, którzy mają wybraną na karcie konkretną
kategorię szczegółową (sprzedaży bądź zakupu)?

Aby odnaleźć kontrahentów z określoną kategorią sprzedaży, na liście
kontrahentów należy uruchomić konstruktor filtra, a następnie na
zakładce [Zaawansowane] w polu Filtr SQL należy wpisać:

@PAR ?@LS0(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:0|@? PAR@
Knt_KatID= ??Kategoria

Z kolei, aby odnaleźć kontrahentów z określoną kategorią zakupu należy
zastosować filtr:

@PAR ?@LS0(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:0|@? PAR@
Knt_KatZakID= ??Kategoria

Przed odfiltrowaniem listy program będzie pytał o kategorię szczegółową.
Aby odnaleźć kontrahentów z kategorią zawierającą określoną frazę, to
stosując poniższy filtr:

Knt_KatID=(select Kat_KatID from cdn.kategorie where
Kat_KatID=Knt_KatID and kat_KodSzczegol like ?@S100|Kat szczeg:'')

podczas wpisywania kategorii, przed bądź za wpisywaną frazą należy
wstawić znak „%” zastępujący dowolny ciąg znaków.

Jak zbudować filtr, który przed odfiltrowaniem listy kontrahentów z
danego województwa będzie wyświetlał listę województw do wyboru?

Na liście kontrahentów, w Konstruktorze filtra na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@R(SELECT Id = 0, Kod = '' UNION
SELECT Id = 1, Kod = 'dolnośląskie' UNION
SELECT Id = 2, Kod = 'kujawsko-pomorskie' UNION
SELECT Id = 3, Kod = 'lubelskie' UNION
SELECT Id = 4, Kod = 'lubuskie' UNION
SELECT Id = 5, Kod = 'łódzkie' UNION
SELECT Id = 6, Kod = 'małopolskie' UNION
SELECT Id = 7, Kod = 'mazowieckie' UNION
SELECT Id = 8, Kod = 'opolskie' UNION
SELECT Id = 9, Kod = 'podkarpackie' UNION
SELECT Id = 10, Kod = 'podlaskie' UNION
SELECT Id = 11, Kod = 'pomorskie' UNION
SELECT Id = 12, Kod = 'śląskie' UNION
SELECT Id = 13, Kod = 'świętokrzyskie' UNION
SELECT Id = 14, Kod = 'warmińsko-mazurskie' UNION
SELECT Id = 15, Kod = 'wielkopolskie' UNION
SELECT Id = 16, Kod = 'zachodniopomorskie')|Woj|&Województwo: @? PAR@
Knt_Wojewodztwo = Case ??Woj
When 1 Then 'dolnośląskie'
When 2 Then 'kujawsko-pomorskie'
When 3 Then 'lubelskie'
When 4 Then 'lubuskie'
When 5 Then 'łódzkie'
When 6 Then 'małopolskie'
When 7 Then 'mazowieckie'
When 8 Then 'opolskie'
When 9 Then 'podkarpackie'
When 10 Then 'podlaskie'
When 11 Then 'pomorskie'
When 12 Then 'śląskie'
When 13 Then 'świętokrzyskie'
When 14 Then 'warmińsko-mazurskie'
When 15 Then 'wielkopolskie'
When 16 Then 'zachodniopomorskie'
Else ''
End

Pierwsza część (od @PAR do PAR@) jest to deklaracja parametru
dynamicznego. Jeżeli zostanie wybrany parametr dynamiczny typu „Lista
rozwijana” to zapytanie SQL musi zwrócić wynik dwukolumnowy – w
pierwszym ma być wartość numeryczna (która zostanie podstawiona do
zmiennej), a w drugim tekst (który zostanie wyświetlony na liście).
Najwygodniej jest najpierw napisać sobie takie zapytanie np. w
WinSQL-u (łatwo wtedy sprawdzić, czy nie ma w nim błędów), a potem
przekleić do „wizarda parametru dynamicznego” w kroku 4 (wizard jest
dostępny na zakładce [Zaawansowane] w Konstruktorze filtra w menu
kontekstowym).
Druga część, to wykorzystanie tego parametru w zapytaniu SQL, które
zostanie podstawione do filtra. Pod ??Woj program podstawi liczbę
odpowiadającą wybranemu województwu, a konstrukcja Case … When … Then
… pozwoli na „przetłumaczenie” z powrotem liczby na tekst.

Kasa/Bank

Jak wyfiltrować dokumenty, które zostały rozliczone w styczniu 14 dni
po terminie płatności?

Klient wystawiał noty odsetkowe tylko klientom, którzy zapłacili 14
dni po upływie terminu płatności. Zastosowanie filtra w Preliminarzu
pozwoliło na wyodrębnienie dokumentów, które odpowiadały ww.
zapytaniu. Wynik można wysłać do Excela i posortować wg nazwy
kontrahenta.
Filtr należy zbudować z poziomu Preliminarza Płatności. W
Konstruktorze filtra, na zakładce: [Zaawansowane] należy wpisać w polu
Filtr SQL:

BZd_DataRoz BETWEEN CONVERT(DATETIME,'2018-01-01',120) AND
CONVERT(DATETIME,'2018-01-31',120) And BZd_DataRoz > DateAdd(day, 14,
BZd_Termin)

Jak wyfiltrować zdarzenia w Preliminarzu, które mają wybraną przez
operatora formę płatności?

Na liście zdarzeń w Preliminarzu, pod ikonką Konstruktor filtra, na
zakładce [Zaawansowane], w polu Filtr SQL wpisujemy:

@PAR ?@R(SELECT FPl_FPlId, FPl_Nazwa FROM CDN.FormyPlatnosci)|fp|&fp: @? PAR@
BZd_FPlId=??fp

Przed odfiltrowaniem pojawi się rozwijana lista z dostępnymi formami płatności.

Jak wyfiltrować z poziomu listy kontrahentów nierozliczone zdarzenia z
preliminarza wystawione w zadanym okresie?

Filtr ten sprawdza, czy w Preliminarzu Płatności dla danego
kontrahenta są zapisy przychodowe, zatwierdzone, nierozliczone i
wystawione w zadanym okresie czasu.
Z poziomu listy kontrahentów w Konstruktorze filtra, na zakładce:
[Zaawansowane] w polu Filtr SQL należy wpisać:

exists ( select * From CDN.BnkZdarzenia
where BZd_DataDok>= ?@D10-|Data od:
and BZd_DataDok<= ?@D10-|Data do: and Bzd_PodmiotTyp = 1 and
Bzd_PodmiotID=Knt_KntID and BZd_Kierunek =1 and BZd_Stan>0
and BZd_KwotaSys<>BZd_KwotaRozSys)

Jak przefiltrować na preliminarzu płatności tylko te FA i FKOR, które
nie mają powiązania z dokumentami magazynowymi?

Trzeba wykonać filtr w Preliminarzu płatności, który uwzględni tabelę
TraNag, w której jest przechowywana taka informacja. Przykładowy filtr
SQL będzie wyglądał tak:

exists (select * from CDN.TraNag where Trn_TrNID=Bzd_DokumentID And
Bzd_DokumentTyp=1 and TrN_Rodzaj=302000 or Trn_Rodzaj=302001 or
Trn_Rodzaj=302002 or Trn_Rodzaj=302002)

Jak wyfiltrować zapisy kasowo/bankowe zawierające kategorię
szczegółowe należące do zadanej kategorii ogólnej?

Na liście zapisów kasowo/bankowych, w Konstruktorze filtra, na
zakładce [Zaawansowane] w polu Filtr SQL należy wpisać:

exists (select Kat_KodOgolny, Kat_KodSzczegol from cdn.kategorie where
BZp_KatID=Kat_KatID AND Kat_KodOgolny=?@S100|Kategoria ogólna:'')

Jak wyfiltrować listę kontrahentów, dla których są pary dokumentów do
rozliczenia?

Chodzi o to aby użytkownik w menu Kasa/Bank/Rozliczenia, po wywołaniu
listy kontrahentów, mógł ją zawęzić do tych, którzy mają nierozliczone
dokumenty, które można ze sobą rozliczyć czyli np. Fakturę Sprzedaży i
dokument KP lub Fakturę zakupu i dokument KW lub Fakturę Sprzedaży i
Fakturę Zakupu lub Dokumenty KP i KW.
Można założyć filtr zaawansowany na liście kontrahentów w menu Ogólne/
Kontrahenci, który będzie korzystał z tabeli CDN.DokumentyKBView.
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
można wpisać:

Exists (Select * From CDN.DokumentyKBView Where DKB_PodmiotTyp = 1 And
DKB_PodmiotId = Knt_KntId And DKB_Rozliczono = 1 And DKB_Kierunek =
Case DKB_TypDokumentuKB When 1 Then 1 Else -1 End)
And Exists (Select * From CDN.DokumentyKBView Where DKB_PodmiotTyp = 1
And DKB_PodmiotId = Knt_KntId And DKB_Rozliczono = 1 And DKB_Kierunek
= Case DKB_TypDokumentuKB When 1 Then -1 Else 1 End)

Podobny filtr można stworzyć na liście pracowników podmieniając:

DKB_PodmiotTyp = 1 And DKB_PodmiotId = Knt_KntId

na

DKB_PodmiotTyp = 3 And DKB_PodmiotId = Pra_PraId

Filtr nie sprawdza waluty dokumentów.

Jak wyfiltrować w Preliminarzu płatności dokumenty, których termin
płatności upłynął więcej niż 30 dni temu?

W Preliminarzu płatności, w Konstruktorze filtra, w polu Filtr SQL
należy wstawić:

datediff ( d , BZd_Termin , {DateSQL(Today())} ) > 30

Filtr policzy różnicę pomiędzy datą bieżącą i terminem płatności i
wyświetli te dokumenty, dla których różnica jest większa niż 30 dni.

Jak wyszukać zduplikowanych kontrahentów i zduplikowane zdarzenia w
Preliminarzu?

W słownikach na liście kontrahentów można zastosować filtr, który
sprawdzi czy są kontrahenci którym powtarza się numer NIP i dodatkowo
pole NIP nie jest puste:

Knt_Nip IN
(SELECT Knt_Nip
FROM CDN.Kontrahenci WHERE Knt_Nip <> ''
GROUP BY Knt_Nip
HAVING COUNT ( Knt_Nip ) > 1 )

W Preliminarzu płatności filtr wyświetli zdarzenia o takim samym
numerze obcym. To pozwoli sprawdzić czy w systemie nie wprowadzono dwa
razy tego samego dokumentu:

BZd_NumerObcy IN
(SELECT BZd_NumerObcy
FROM cdn.bnkzdarzenia
GROUP BY BZd_NumerObcy
HAVING COUNT ( BZd_NumerObcy ) > 1 )

Jak wyfiltrować w Preliminarzu faktury, które w rejestrze VAT znajdują
się w konkretnym podrejestrze?

W Preliminarzu należy uruchomić Konstruktor filtra, a następnie na
zakładce [Zaawansowane] w polu Filtr SQL należy wpisać:

(Bzd_DokumentTyp='2' AND Bzd_DokumentID in (select Van_VanID from
CDN.VatNag where Bzd_DokumentID=Van_VanID AND VaN_Rejestr=?@S100|Nazwa
rejestru:'')) OR (Bzd_DokumentTyp='1' AND Bzd_DokumentID in (select
Van_TrnID from CDN.VatNag where Bzd_DokumentID=Van_TrnID AND
VaN_Rejestr=?@S100|Nazwa rejestru:''))

Przed odfiltrowaniem listy program będzie pytał o nazwę rejestru dla
którego ma wyświetlić faktury.
Inny wariant powyższego filtra, gdzie nazwa rejestru VAT wybierana
jest z rozwijalnej listy:

@PAR ?@R(SELECT LP=Gru_GruID, KOD=Gru_Nazwa FROM cdn.Grupy WHERE
(Gru_Typ=1 OR Gru_Typ=2))|RejVat|&RejVat:0 |@? PAR@
(Bzd_DokumentTyp='2' AND Bzd_DokumentID in (select Van_VanID from
CDN.VatNag where Bzd_DokumentID=Van_VanID AND
VaN_Rejestr=??_RES2_RejVat))
OR
(Bzd_DokumentTyp='1' AND Bzd_DokumentID in (select Van_TrnID from
CDN.VatNag where Bzd_DokumentID=Van_TrnID AND
VaN_Rejestr=??_RES2_RejVat))

Filtry uwzględniają zarówno faktury wprowadzone bezpośrednio do
Rejestrów VAT jak i faktury wystawione
w module Faktury i przeniesione do Rejestrów VAT.

Jak wyfiltrować kontrahentów, którzy nie są osobą fizyczną i suma
nierozliczonych dokumentów jest większa niż podana przez operatora?

Na liście kontrahentów w menu Ogólne/ Kontrahenci, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select Knt_KntId from CDN.BnkZdarzenia where
Knt_KntId=BZd_PodmiotID AND BZd_PodmiotTyp=1
having SUM(BZd_Kierunek * (BZd_KwotaSys-BZd_KwotaRozSys)) >?@N-15.4|Kwota:0)

Wyrażenie:

having SUM(BZd_Kierunek * (BZd_KwotaSys-BZd_KwotaRozSys))

pozwoli wyfiltrować różnicę nierozliczonych przychodów i rozchodów.
Filtr uwzględni wszystkie dokumenty z Preliminarza Płatności dla
danego kontrahenta. Dla zawężonej listy będzie można wygenerować np.
Potwierdzenie Salda lub Ponaglenie Zapłaty.
Poniżej filtr, który uwzględni również historyczność czyli stan
rozliczeń na konkretny dzień podany przez operatora.
Na liście kontrahentów w menu Ogólne/ Kontrahenci, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu: Filtr SQL należy wpisać:

@PAR ?@D17|Dzien|&Na dzień:{Today()} @? PAR@ @PAR ?@N15.2|Kwota|&Kwota
powyżej:0 @? @RH(999999) PAR@ @PAR ?@S3|Waluta|&Waluta:PLN @? @U()
PAR@ Knt_Finalny = 0 AND EXISTS ( SELECT BZd_PodmiotId FROM (SELECT
BZd_PodmiotId, BZd_Kierunek, BZd_Kwota, BZd_KwotaRoz =
SUM(IsNull(BRK_Kwota,0)) FROM CDN.BnkZdarzenia LEFT OUTER JOIN
(CDN.BnkRozRelacje JOIN CDN.BnkRozKwoty ON BRR_BRKId = BRK_BRKId) ON
BZd_BZdId = BRR_ZDokId AND BRR_ZDokTyp = 1 AND (BRK_DataDok <= ??Dzien
OR BRK_DataDok Is NULL) WHERE BZd_Stan > 0 AND BZd_PodmiotTyp = 1 AND
BZd_PodmiotID = Knt_KntId AND BZd_DataDok <= ??Dzien AND CASE
BZd_Waluta WHEN '' THEN 'PLN' ELSE BZd_Waluta END = ??Waluta AND
BZd_Rozliczono <> 0 GROUP BY BZd_PodmiotId, BZd_Kierunek, BZd_Kwota,
BZd_BZdId ) As TmpTable GROUP BY BZd_PodmiotId HAVING Sum(BZd_Kierunek
* (BZd_Kwota-BZd_KwotaRoz)) > ??Kwota )

Jak wyfiltrować na liście zapisów kasowo bankowych te, które mają
uzupełnione konto Wn lub konto Ma w kwotach dodatkowych?

Na liście zapisów kasowo/bankowych pod ikoną konstruktora filtra, na
zakładce [Zaawansowane], w polu Filtr SQL wpisujemy:

exists (select * from CDN.KwotyDodatkowe where
Kdd_DokumentID=Bzp_BzpID AND KDD_DokumentTyp=14 AND (Kdd_Segment1<>''
OR Kdd_Segment2<>''))

Aby wyfiltrować te które mają wpisane określone konto po stronie Wn ,
możemy użyć:

exists (select * from CDN.KwotyDodatkowe where
Kdd_DokumentID=Bzp_BzpID AND KDD_DokumentTyp=14 AND
Kdd_Segment1=?@S100|KontoWN:'')
Analogicznie konto Ma:

exists (select * from CDN.KwotyDodatkowe where
Kdd_DokumentID=Bzp_BzpID AND KDD_DokumentTyp=14 AND
Kdd_Segment2=?@S100|KontoMA :'')

lub wyszukując określoną kwotę w kwotach dodatkowych:

exists (select * from CDN.KwotyDodatkowe where
Kdd_DokumentID=Bzp_BzpID AND KDD_DokumentTyp=14 AND
Kdd_Kwota=?@S100|Kwota:'')

Filtr dla zapisów Kasowych/Bankowych, wyświetlający zapisy
kontrahentów, którzy są przydzieleni do danego pracownika (ustawienie
w Karcie Kontrahenta)

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_PRCW.DLL|CALLLOOKUPPRILISTA())|Pracownik|&Pracownik:0|@? PAR@
BZp_PodmiotTyp=1 and exists (select * from cdn.kontrahenci where
BZp_PodmiotID=Knt_KntId and Knt_OpiekunId=??Pracownik and
Knt_OpiekunTyp=3)

Filtr wyświetlający zdarzenia w preliminarzu dla dwóch (lub więcej)
kontrahentów:

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKNTLISTA())|kod1|&kontrahent1:REG=
@? PAR@ BZd_PodmiotID = ??kod1
OR
@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKNTLISTA())|kod2|&kontrahent2:REG=
@? PAR@ BZd_PodmiotID = ??kod2

Filtr ograniczający listę wyświetlanych w Preliminarzu płatności
dokumentów do płatności pochodzących z Faktur Zakupu z modułu Handel i
zapisów z Rejestru zakupu VAT:

Filtr może być stosowany wtedy, gdy np. Faktury Zakupu z których
towary mają wejść na magazyn wprowadzamy w module Handel, a Faktury
Zakupu kosztowe – od razu w Rejestrach VAT. Po zastosowaniu takiego
filtra w Preliminarzu możemy widzieć jednocześnie oba te rodzaje
dokumentów (i tylko te dokumenty).
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.TraNag where Trn_TrNID=Bzd_DokumentID And
Bzd_DokumentTyp=1 and TrN_TypDokumentu=301) or exists (select * from
CDN.VatNag where VaN_VaNID=Bzd_DokumentID And Bzd_DokumentTyp=2 and
VaN_Typ=1)

Filtr ograniczający listę wyświetlanych w Preliminarzu płatności
dokumentów do płatności pochodzących z Faktur Sprzedaży z modułu
Handel i z Rejestru sprzedaży VAT.

Filtr może być stosowany wtedy, gdy np. Faktury Sprzedaży, z których
towary mają wyjść z magazynu wprowadzamy w module Handel, a pozostałe
faktury – od razu w Rejestrach sprzedaży VAT.
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.TraNag where Trn_TrNID=Bzd_DokumentID And
Bzd_DokumentTyp=1 and TrN_TypDokumentu=302) or exists (select * from
CDN.VatNag where VaN_VaNID=Bzd_DokumentID And Bzd_DokumentTyp=2 and
VaN_Typ=2)

W jaki sposób w Preliminarzu odnaleźć płatności mające wybrany
rachunek bankowy po nazwie tego rachunku, określanego na karcie
kontrahenta?

W Preliminarzu płatności w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@S30|Rachunek|&Rachunek:''@? PAR@
exists (select * from CDN.SchematPlatnosci where
BZd_RachunekNr=SPL_RachunekNr and SPL_PodmiotID=BZd_PodmiotID and
SPL_PodmiotTyp=1 and SPL_Opis=??Rachunek)

Jak na liście dokumentów rozliczonych odnaleźć te pochodzące z
konkretnego rejestru VAT?

Na liście dokumentów rozliczonych w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@S30|Rejestr|&Rejestr:''@? PAR@
(BRK_LDokTyp=1 and exists (select * from CDN.BnkZdarzenia where
BRK_LDokID=BZd_BZdID and BZd_DokumentTyp=2 and exists ( select * from
CDN.VatNag where BZd_DokumentID=VaN_VaNID and VaN_Rejestr =
??Rejestr))) OR (BRK_PDokTyp=1 and exists (select * from
CDN.BnkZdarzenia where BRK_PDokID=BZd_BZdID and BZd_DokumentTyp=2 and
exists ( select * from CDN.VatNag where BZd_DokumentID=VaN_VaNID and
VaN_Rejestr = ??Rejestr)))

W jaki sposób w Preliminarzu odnaleźć płatności z faktur sprzedażowych
mających konkretny atrybut i wartość atrybutu?

W Preliminarzu płatności w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@LS20(SELECT [DeA_DeAId], [DeA_Kod], [DeA_Nazwa] FROM
[CDN].[DefAtrybuty] WHERE [DeA_Typ]= 4|GENERICLOOKUP(Atrybuty
dokumentów, 0, 1))|Atrybut|&Atrybut: @? @MSG(Wybór z listy) @TIP(Wybór
z listy) PAR@
@PAR ?@S100|Wartosc|&Wartość: @? @MSG(Wartość atrybutu) @TIP(Wartość
atrybutu) PAR@
EXISTS (SELECT * FROM CDN.TraNag JOIN CDN.DokAtrybuty ON DAt_TrNId =
TrN_TrNId WHERE TrN_TrNID = BZd_DokumentID AND BZd_DokumentTyp=1 AND
TrN_TypDokumentu=302 AND DAt_DeAId=??Atrybut AND
DAt_WartoscTxt=??Wartosc)

W jaki sposób odnaleźć dokumenty nierozliczone kontrahentów ze
statusem ‚Partner’?

Na liście dokumentów nierozliczonych w Konstruktorze filtra, na
zakładce [Zaawansowane] należy wpisać:

(DKB_TypDokumentuKB=1 And EXISTS (Select * From CDN.BnkZdarzenia JOIN
CDN.Kontrahenci ON BZd_PodmiotID=Knt_KntId AND BZd_PodmiotTyp=1 where
DKB_DKBId=BZd_BZdID And Knt_Rodzaj_Partner=1)) OR
(DKB_TypDokumentuKB=2 And EXISTS (Select * From CDN.BnkZapisy JOIN
CDN.Kontrahenci ON BZp_PodmiotID=Knt_KntId AND BZp_PodmiotTyp=1 where
DKB_DKBId=BZp_BZpID And Knt_Rodzaj_Partner=1))

W jaki sposób odnaleźć różnice kursowe wygenerowane przez zapisy
kasowe/bankowe wprowadzone do konkretnego rejestru?

Na liście różnic kursowych w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@S30|Rejestr|&Rejestr:''@? PAR@
(BRK_LDokTyp=2 and exists (select * from CDN.BnkZapisy where
BRK_LDokID=BZp_BZpID and exists ( select * from CDN.BnkRachunki where
BRa_BRaID=BZp_BRaID and BRa_Symbol = ??Rejestr)))
OR
(BRK_PDokTyp=2 and exists (select * from CDN.BnkZapisy where
BRK_PDokID=BZp_BZpID and exists ( select * from CDN.BnkRachunki where
BRa_BRaID=BZp_BRaID and BRa_Symbol = ??Rejestr)))

W jaki sposób odnaleźć kontrahentów mających wystawione w module
Kasa/Bank potwierdzenia sald w 2018 roku?

Na liście kontrahentów w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

Exists (Select * From CDN.BnkDokNag Where BDN_PodmiotID=Knt_KntID And
BDN_PodmiotTyp=1 And BDN_Typ=223 And BDN_NumerPelny Like '%2018%')

W jaki sposób odnaleźć dokument kompensaty na którym wskazano dokument
o określonym numerze?

Z poziomu Kasa/Bank/ Dokumenty kompensat w Konstruktorze filtra, na
zakładce [Zaawansowane] należy wpisać:

@PAR ?@S50|Numer_dok|Numer szukanego dokumentu:''@? PAR@
EXISTS (select * from cdn.KompensatyElem left join cdn.BnkRozKwoty on
KPE_BRKID = BRK_BRKID where (BRK_LNumer like ??_QNumer_dok + '%' or
BRK_PNumer like ??_QNumer_dok + '%') and KPN_KPNID = KPE_KPNID)

Handel i Faktury

Jak wyfiltrować dokumenty FA, które wystawione są na klienta
detalicznego ale nie ‘od netto’?

Trzeba wykonać zapytanie na liście Faktur Sprzedaży w module Faktury,
uwzględniając tabelę Kontrahenci, gdzie Knt_Finalny = 1. W
Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Exists(select * from CDN.Kontrahenci where Trn_PodID=Knt_KntID AND
TrN_PodmiotTyp=1 AND TrN_TypNB=2 AND Knt_Finalny=1)

Jak z listy faktur sprzedaży odfiltrować te faktury, które są
nierozliczone lub rozliczone częściowo?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Exists (select * from CDN.BnkZdarzenia where TrN_TrNID=BZd_DokumentID
AND Bzd_DokumentTyp='1' AND (Bzd_Kwota-Bzd_KwotaRoz<>0))

Filtr można zastosować również na liście faktur zakupu.

Jak wyfiltrować dokumenty handlowo-magazynowe, które wystawił
określony operator?

Filtr powinien wyglądać w ten sposób:
Filtr SQL

@PAR ?@R(SELECT ID = Ope_OpeId, Kod = Ope_Kod From
{OPBK()}.CDN.Operatorzy Order By Ope_Kod)|Operator|&Operator:1 @? PAR@
TrN_OpeZalID = ??Operator

Umożliwi to wybór z listy operatorów wybranego operatora i
przefiltrowanie dokumentów po określonym operatorze. Filtr pokazuje
dokumenty WYSTAWIONE przez danego operatora. Aby filtr reagował na
dokumenty ZMODYFIKOWANE przez operatora należy zmienić TrN_OpeZalID na
TrN_OpeModID

Jak filtrować kontrahentów wg atrybutów podpiętych na karcie kontrahenta?

Filtr SQL dla wyfiltrowania kontrahentów z zadanym kodem atrybutu z
listy kontrahentów. Filtr przed odfiltrowaniem listy będzie wyświetlał
listę atrybutów dla kontrahentów.

W celu dodania filtra należy w Konstruktorze filtra wywołanym z
poziomu listy kontrahentów, na zakładce [Zaawansowane], w polu Filtr
SQL wpisać:

@PAR ?@R(SELECT ID = DeA_DeAId, Kod = DeA_Kod FROM CDN.DefAtrybuty
WHERE DeA_Typ=2 ORDER BY DeA_Kod)|KodAtr|&Kod atrybutu:ATR1 @? PAR@
exists(select * from CDN.KntAtrybuty where KnA_PodmiotId=Knt_KntId AND
KnA_PodmiotTyp=1 AND KnA_DeAId = ??KodAtr )

Filtr SQL dla wyfiltrowania kontrahentów z określoną wartością atrybutu.

W celu dodania filtra należy w Konstruktorze filtra wywołanym z
poziomu listy kontrahentów, na zakładce [Zaawansowane], w polu Filtr
SQL wpisać:

Exists (Select * From CDN.KntAtrybuty Where Knt_KntId=KnA_PodmiotId
AND KnA_PodmiotTyp=1 AND KnA_WartoscTxt LIKE '%' + ?@S100|Wartość:'' +
'%')

Jak filtrować listę faktur wg atrybutów podpiętych na karcie kontrahenta?

Filtr SQL dla listy faktur pokazujący dokumenty wystawione na
kontrahentów mających na swoich kartach przypisany określony atrybut.
Filtr przed odfiltrowaniem listy będzie wyświetlał listę atrybutów
kontrahentów.

W celu dodania filtra należy w Konstruktorze filtra wywołanym z
poziomu listy faktur, na zakładce [Zaawansowane], w polu Filtr SQL
wpisać:

@PAR ?@R(SELECT ID = DeA_DeAId, Kod = DeA_Kod FROM CDN.DefAtrybuty
WHERE DeA_Typ=2 ORDER BY DeA_Kod)|KodAtr|&Kod atrybutu:ATR1 @? PAR@
exists(select * from CDN.KntAtrybuty Where KnA_PodmiotId=TrN_PodId AND
KnA_PodmiotTyp=TrN_PodmiotTyp AND KnA_DeAId =??KodAtr)

Filtr SQL dla listy faktur pokazujący dokumenty wystawione na
kontrahentów mających na swoich kartach przypisany atrybut z określoną
wartością.

W celu dodania filtra należy w Konstruktorze filtra wywołanym z
poziomu listy faktur, na zakładce [Zaawansowane], w polu Filtr SQL
wpisać:

Exists (Select * From CDN.KntAtrybuty Where KnA_PodmiotId=TrN_PodId
AND KnA_PodmiotTyp=TrN_PodmiotTyp AND KnA_WartoscTxt LIKE '%' +
?@S100|Wartość:'' + '%')

Jak wyfiltrować faktury, które zostały wystawione na kontrahentów,
którzy mają przyporządkowanego opiekuna w formie operatora systemu
Comarch ERP Optima?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = Ope_OpeID , Kod = Ope_Kod from
{opbk()}.CDN.Operatorzy)|Operator|&Operator: @? PAR@
Exists (Select * From CDN.Kontrahenci Where Knt_OpiekunID = ??Operator
and TrN_PodId = Knt_KntId And TrN_PodmiotTyp = 1)

Jak wyfiltrować listę Faktur Sprzedaży po opiekunie, który jest
zapisany na karcie kontrahenta i jest to pracownik firmy?

Na liście faktur, w konstruktorze filtra, na zakładce [Zaawansowane],
w polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT ID = Pra_PraID, Kod = Pra_Kod From
CDN.PracKod)|Pracownik|&Pracownik: @? PAR@
Exists (Select * From CDN.Kontrahenci Where Knt_OpiekunID =
??Pracownik and TrN_PodID = Knt_KntID and TrN_PodmiotTyp = 1)

Jak wyfiltrować listę faktur jeśli na fakturze mam wpisaną daną
kategorię nagłówka szczegółową?

Na liście faktur w module FA, w Konstruktorze filtra, na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT Kat_KatID, Kat_KodSzczegol From CDN.Kategorie Where Kat_Poziom
= 2)|Kategoria|&Kategoria:AAA @? PAR@
TrN_KatID = ??Kategoria

Jak wyfiltrować faktury na liście faktur które są rozliczone po terminie?

Należy założyć filtr zaawansowany na liście faktur, który korzystał
będzie z tabeli CDN.BnkZdarzenia.
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.BnkZdarzenia where TrN_TrNID=BZd_DokumentID and
Bzd_DokumentTyp='1' and BZD_dataroz > Bzd_datareal)

Jak wyfiltrować dokumenty RO z listy RO, które są przekształcone do WZ
a dodatkowo WZ ma wystawioną Fakturę Sprzedaży?

Na liście RO, po ikoną konstruktora filtra, na zakładce
[Zaawansowane], w polu Filtr SQL wpisujemy:

EXISTS(Select * from cdn.tranagrelacje rel1 Where rel1.trr_trnid =
trn_trnid and rel1.trr_fatyp = 306 and EXISTS(select * from
cdn.tranagrelacje rel2 where rel2.trr_trnid = rel1.trr_faid and
rel2.trr_fatyp =302))

Jak wyfiltrować dokumenty PA z listy PA, które są przekształcone do FA
a FA skojarzone z tymi PA nie ma dokumentów WZ?

Na liście PA, pod ikoną konstruktora filtra, na zakładce
[Zaawansowane], w polu Filtr SQL wpisujemy:

EXISTS (SELECT * FROM CDN.TraNag FA WHERE A.TrN_FaID = FA.TrN_TrNID AND
FA.TrN_FaID IS NOT NULL AND FA.TrN_Rodzaj = 302006 )

Jak wyfiltrować wybrany typ dokumentu z listy FA używając funkcji serwerowej?

Zastosowanie złożonego filtra na liście faktur (np. wyszukujących
faktury finalne przekształcone z Faktury Pro Forma i powiązane z
dokumentem WZ) nie działa przy księgowaniu dokumentów. Pojawia się
komunikat „The multi-part identifier „A.trn_trnid” could not be
bound.”

W związku z tym filtr z aliasem o postaci:

exists (select * from cdn.tranag A1 left join cdn.tranag A2 on
A1.trn_trnid = A2.trn_faid left join cdn.tranag A3 on A1.trn_faid =
A3.trn_trnid where A2.trn_rodzaj = 302200 and A.trn_trnid =
A3.trn_trnid)

należy zastąpić filtrem: (select CDN.fn_PrzykladowaNazwa(Trn_trnID))=1,
gdzie funkcja serwerowa ma postać:

Create Function CDN.fn_PrzykladowaNazwa(@ATrnID int)
RETURNS int
AS
BEGIN
Declare @Result int
Set @Result = 0
select @Result = count(*) from cdn.tranag A1
join cdn.tranag A2 on A1.trn_trnid = A2.trn_faid
join cdn.tranag A3 on A1.trn_faid = A3.trn_trnid
where A2.trn_rodzaj = 302200 and A3.trn_trnid = @ATrnID
RETURN @Result
END
GO

Jak wyfiltrować kontrahentów, którzy np. w m-cu styczniu zapłacili po
terminie ? Lista może być potrzebna do np. do sporządzenia masowych
not odsetkowych dla kontrahentów.

Filtr z poziomu słowników kontrahentów. W Konstruktorze filtra, na
zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (
select * from CDN.BnkZdarzenia where BZd_PodmiotID=Knt_KntID and
BZd_PodmiotTyp=1 and BZd_Rozliczono=1 and BZd_DataRoz BETWEEN
?@D17|Data od:75609 AND ?@D17|Data do:75609)
or exists (
select * from CDN.BnkZdarzenia where BZd_PodmiotID=Knt_KntID and
BZd_PodmiotTyp=1 and BZd_Rozliczono=2 and BZd_DataRoz BETWEEN
?@D17|Data od:75609 AND ?@D17|Data do:75609)

Jak wyfiltrować listę kontrahentów aby uzyskać tylko tych kontrahentów
z którymi prowadziliśmy transakcje ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

EXISTS (
SELECT [TrN_TrNID] FROM [CDN].[TraNag] WHERE [TrN_PodmiotTyp] =
A.[Knt_PodmiotTyp] AND [TrN_PodID] = A.[Knt_KntId] AND
[TrN_TypDokumentu] IN (302)
)

Typ dokumentu może przyjąć następujące wartości:
301 – [FZ] Faktura zakupu
302 – [FA] Faktura sprzedaży
303 – [PW] Przyjęcie wewnętrzne
304 – [RW] Rozchód wewnętrzny
305 – [PA] Paragon
306 – [WZ] Wydanie zewnętrzne
307 – [PZ] Przyjęcie zewnętrzne
308 – [RO] Rezerwacja odbiorcy
309 – [ZD] Zamówienie dostawcy
310 – [BOM] Bilans otwarcia magazynu
311 – [AI] Arkusz Inwentaryzacyjny
312 – [MM] Przesunięcie międzymagazynowe
313 – [PKA] Przyjęcie kaucji
314 – [WKA] Wydanie kaucji
317 – [PWP] Przyjęcie wewnętrzne produkcji
318 – [RWS] Rozchód wewnętrzny składników
320 – [FPF] Faktura ProForma
345 – [TF] Dokument TaxFree
350 – [FRR] Faktura RR

Jak wyfiltrować listę kontrahentów z którymi (nie było/lub było)
transakcji po np. 01.01.2018r.?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:
a) Kontrahenci z którymi nie było transakcji

not exists (select * from CDN.TraNag Z where A.Knt_KntId = Z.TrN_PodId
and TrN_PodmiotTyp = 1 and TrN_DataOpe >='2018-01-01')

b) Kontrahenci z którymi były transakcje

exists (select * from CDN.TraNag Z where A.Knt_KntId = Z.TrN_PodId and
TrN_PodmiotTyp = 1 and TrN_DataOpe >='2018-01-01')

Jak wyfiltrować listę kontrahentów, z którymi (nie było/lub było)
transakcji tylko FA, FZ po np. 01.01.2018r.?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:
a) Kontrahenci z którymi nie było transakcji

not exists (select * from CDN.TraElem where TrE_PodID=A.Knt_KntID and
TrE_PodmiotTyp=A.Knt_PodmiotTyp and TrE_DataOpe >= '2018-01-01' and
TrE_TypDokumentu IN (302,301))
b) Kontrahenci, z którymi były transakcje

exists (select * from CDN.TraElem where TrE_PodID=A.Knt_KntID and
TrE_PodmiotTyp=A.Knt_PodmiotTyp and TrE_DataOpe >= '2018-01-01' and
TrE_TypDokumentu IN (302,301))

Typ dokumentu:
301 – [FZ] Faktura zakupu
302 – [FA] Faktura sprzedaży

Jak wyfiltrować na liście zasobów lub cenniku towary uwzględnione z
grupy głównej i grup dodatkowych ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPTWGLISTA())|TwrGrupa|&Grupa towarowa:@? PAR@
Twr_GIDNumer IN (SELECT GIDNumer FROM CDN.TwrInTwG(??TwrGrupa))

Jak wyfiltrować na liście zasobów lub cenniku towary uwzględnione
tylko z grupy głównej ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPTWGLISTA())|TwrGrupa|&Grupa towarowa:@? PAR@
Twr_TwGGIDNumer = ??TwrGrupa

Jak wyfiltrować na liście zasobów lub cenniku towary, które na karcie
mają określonego Dostawcę ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKNTLISTA())|Dostawca|&Dostawca:REG=!NIEOKREŚLONY!
@? PAR@ Twr_KntId = ??Dostawca

Jak wyfiltrować na liście zasobów lub cennika towary względem kodu,
wartości lub nazwy atrybutu przypisanego na karcie tego towaru ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:
a) potrzeba odfiltrować towary posiadające atrybut o kodzie (bez
podawania wartości tego atrybutu)

@PAR ?@LS20(SELECT [DeA_DeAId], [DeA_Kod], [DeA_Nazwa] FROM
[CDN].[DefAtrybuty] WHERE [DeA_Typ]= 1|GENERICLOOKUP(Atrybuty towarów,
0, 1))|Atrybut|&Atrybut: @? @MSG(Wybór z listy) @TIP(Wybór z listy)
PAR@
EXISTS(SELECT [TwA_TwAId] FROM [CDN].[TwrAtrybuty] WHERE [Twr_TwrId] =
[TwA_TwrId] AND [TwA_DeAId]= ??Atrybut)

b) potrzeba odfiltrować towary posiadające atrybut z określoną wartością

@PAR ?@LS20(SELECT [DeA_DeAId], [DeA_Kod], [DeA_Nazwa] FROM
[CDN].[DefAtrybuty] WHERE [DeA_Typ]= 1|GENERICLOOKUP(Atrybuty towarów,
0, 1))|Atrybut|&Atrybut: @? @MSG(Wybór z listy) @TIP(Wybór z listy)
PAR@
@PAR ?@S100|Wartosc|&Wartość: @? @MSG(Wartość atrybutu) @TIP(Wartość
atrybutu) PAR@
EXISTS(SELECT [TwA_TwAId] FROM [CDN].[TwrAtrybuty] WHERE [Twr_TwrId] =
[TwA_TwrId] AND [TwA_DeAId]= ??Atrybut AND [TwA_WartoscTxt] =
??Wartosc)

c) potrzeba odfiltrować towary po nazwie atrybutu towaru

EXISTS (SELECT * FROM CDN.TwRAtrybuty JOIN CDN.DefAtrybuty on
TwA_DeAId = DeA_DeaID WHERE Twr_TwrId = TwA_TwrId AND
DeA_Nazwa=?@S100|Nazwa atrybutu:'')

Jak wyfiltrować na liście zasobów lub cenniku zasoby po wartościach
atrybutów towarów typu lista ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT DAE_DAEId, DAE_Wartosc from
CDN.DefAtrElem)|wart_atr|&wart_atr:REG= @? PAR@ exists (select * from
CDN.DefAtrElem, CDN.TwrAtrybuty where Twr_TwrId = TwA_TwrId and
TwA_WartoscTxt in (select DAE_Wartosc from CDN.DefAtrElem where
DAE_DAEId=??wart_atr))

Jak na liście zasobów lub cenniku wyfiltrować towary które mają
jakikolwiek atrybut?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.TwrAtrybuty where TwA_TwrId = Twr_TwrId)

Jak na liście zasobów lub cenniku wyfiltrować towary które nie maja
żadnego atrybutu?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

not exists (select * from CDN.TwrAtrybuty where TwA_TwrId = Twr_TwrId)

Jak na liście zasobów lub cenniku wyfiltrować towary, które w danym
dniu były sprzedawane na dokumentach FA lub PA?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|data|&data:REG={Today()} @? PAR@
exists (select * from CDN.TraElem T where A.Twr_TwrId=T.TrE_TwrId and
T.TrE_DataDok=??data and (T.TrE_TypDokumentu=302 or
T.TrE_TypDokumentu=305))

Wariant filtra w którym podajemy zakres dat:

@PAR ?@D17|data_od|&data od:REG={Today()} @? PAR@
@PAR ?@D17|data_do|&data do:REG={Today()} @? PAR@
exists (select * from CDN.TraElem T where A.Twr_TwrId=T.TrE_TwrId and
T.TrE_DataDok>=??data_od and T.TrE_DataDok<=??data_do and
(T.TrE_TypDokumentu=302 or T.TrE_TypDokumentu=305))

Jak na liście zasobów lub cenniku wyfiltrować towary z którymi nie
było transakcji po zadanej dacie?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|data|&Data:REG={Today()} @? PAR@
not exists (select * from CDN.TraElem Z where A.Twr_TwrId =
Z.TrE_TwrId and TrE_DataOpe >= ??data)

Jak na liście zasobów lub cenniku wyfiltrować towary, których cena
zakupu (ID=1) jest równa zero ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.TwrCeny C where A.Twr_TwrID=C.TwC_TwrID and
C.TwC_TwCNumer=1 and C.TwC_Wartosc=0)

Jak na liście zasobów lub cenniku wyfiltrować poprzez wybór z listy
ceny te towary, które mają tą cenę większą od zera?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = DfC_Lp, KOD = DfC_Nazwa from
CDN.DefCeny)|cena|&cena:REG= @? PAR@
exists(select * from CDN.TwrCeny where TwC_TwCNumer=??cena and
TwC_Wartosc>0 and TwC_TwrID=TwR_TwrID)

Jak na liście zasobów wyfiltrować towary po ilości, a nie ilości
dostępnej przy zaznaczonym parametrze „zerowe”?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Twi_Ilosc>0

Jak wyfiltrować listę zasobów z którymi (nie było lub było) transakcji
po np. 01.01.2018?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:
a) Towary z którymi nie było transakcji:

not exists (select * from CDN.TraElem Z where A.Twr_TwrId =
Z.Tre_TwrId and Tre_DataOpe >= '2018-01-01')

b) Towary z którymi były transakcje:

exists (select * from CDN.TraElem Z where A.Twr_TwrId = Z.Tre_TwrId
and Tre_DataOpe >= '2018-01-01')

Jak wyfiltrować WZ-ki po operatorze, który stworzył dokument źródłowy
(FA lub PA)?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = Ope_OpeId, Kod = Ope_Kod From
{OPBK()}.CDN.Operatorzy Order By Ope_Kod)|OperatorId|&Operator:1 @?
PAR@ EXISTS (SELECT * FROM CDN.TraNag Z WHERE A.TrN_FaId
= Z.TrN_TrNID AND Z.TrN_OpeZalId= ??OperatorId)

Jak wyfiltrować na liście dokumenty handlowo-magazynowe po danej
kategorii dokumentu?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:REG=-brak-
@? PAR@
TrN_KatID = ??Kategoria

Jak wyfiltrować dokumenty WZ utworzone z FPF, do której były
wygenerowane zaliczki, ale tylko dla FPF, które nie zostały jeszcze
przekształcone do faktur finalnych?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

A.TrN_Rodzaj=306010 and exists (select * from CDN.Tranag Z where
Z.TrN_TypDokumentu=320 and A.TrN_FaID=Z.TrN_TrNID and exists (select *
from CDN.Tranag t2 where t2.Trn_Rodzaj=302200 and
t2.TrN_FaID=Z.TrN_TrNID))

Jak wyfiltrować dokumenty WZ, które są skojarzone z innymi dokumentami
ale ich daty wystawienia się różnią?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Exists (select * from CDN.TraNag Z where A.TrN_FaId = Z.TrN_TrNID and
Z.TrN_DataWys != A.TrN_DataWys and A.Trn_Rodzaj=306004)

Jak wyfiltrować listę dokumentów handlowo-magazynowych aby nie
wyświetlały się dokumenty, których wartość wynosi zero np. na
korektach oraz te które są zaksięgowane do KH? Wtedy dokumenty, które
nie są zaksięgowane, a ich wartość zakupu jest równa zero nie będą
widoczne.

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

IsNull(TrN_DekId,0)=0 AND TrN_WartoscZakupu<>0

Jak wyfiltrować dokumenty PZ, które zostały skorygowane w całości?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select Z.TrN_ZwrID from CDN.TraNag Z where Z.TrN_ZwrId =
A.TrN_TrNID and Z.TrN_Bufor=0 and (Z.TrN_Rodzaj=307001 or
Z.TrN_Rodzaj=307002 or Z.TrN_Rodzaj=307003 or Z.TrN_Rodzaj=307004)
group by Z.TrN_ZwrID having SUM(Z.Trn_RazemBrutto)*(-1)=
A.Trn_RazemBrutto)

Jak wyfiltrować listę tych FA, których elementy mają wskazany przez
nas atrybut towaru?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@S50|atrybut|&Kod atrybutu:REG=’’ @? PAR@ exists(select * from
CDN.TraElem,
CDN.Twratrybuty join CDN.DefAtrybuty on TwA_DeAId = DeA_DeaID where
Trn_TrnId = Tre_TrnId
and Tre_TwrId = TwA_TwrId and Dea_Kod=??atrybut)

Gdy szukamy atrybut towaru o zadanej wartości:

@PAR ?@S50|atrybut|&Wartość atrybutu:REG= @? PAR@ exists(select * from
CDN.TraElem, CDN.Twratrybuty join CDN.DefAtrybuty on TwA_DeAId =
DeA_DeaID where Trn_TrnId = Tre_TrnId and Tre_TwrId = TwA_TwrId and
Twa_wartosctxt=??atrybut)

Można filtrować też mniej rygorystycznie z zastosowaniem wyrażenia:
(LIKE ‘%’+…+’%’)

Jak wyfiltrować na liście Faktur sprzedaży listę faktur zaliczkowych
bez faktur finalnych?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

A.Trn_Rodzaj = 302200 and exists (select * from CDN.TraNag Z where
A.Trn_Faid = Z.Trn_TrnId and Z.Trn_TypDokumentu = 320 and Z.Trn_Faid
is Null)

Niestety filtr ten nie będzie działał na standardowym wydruku listy
faktur. Proszę w przypadku wydruku tak wyfiltrowanej listy korzystać z
wydruku GenRap.

Jak wyfiltrować na liście faktur sprzedaży faktury zaliczkowe do
których jest wystawiona faktura finalna?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

EXISTS (SELECT * FROM CDN.TraNag Z WHERE A.TrN_FaId = Z.TrN_TrNID AND
Z.TrN_FaId is not null AND A.TrN_Rodzaj = 302200)

Jak wyfiltrować faktury sprzedaży, które są skojarzone z innymi
dokumentami, ale ich daty wystawienia się różnią?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Exists (select * from CDN.TraNag Z where Z.TrN_FaId = A.TrN_TrNID and
Z.TrN_DataWys != A.TrN_DataWys and A.Trn_Rodzaj=302004)

Jak wyfiltrować dokumenty handlowe których termin płatności mija w
zadanym okresie.

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

TrN_Termin BETWEEN ?@D17|&Od:REG={Today()} @? AND ?@D17|&Do:REG={Today()} @?

Jak wyfiltrować listę dokumentów handlowo-magazynowych po wybranym towarze?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_TWR.DLL|CALLLOOKUPTWRLISTA())|Towar|&Towar:REG= @? PAR@
exists (select * from CDN.TraElem where Trn_TrnId = Tre_TrnId and
Tre_TwrId = ??Towar)

Jak wyfiltrować faktury sprzedaży po fragmencie nazwy umieszczonej na
zakładce -kontrahent odbiorca faktury? (Np. głównym nabywcą jest Makro
W-dwa a odbiorcą faktury Makro Olsztyn).

W konstruktorze filtra wybieramy pole „TRN_OdbNazwa1 (Pierwsza linia
nazwy odbiorcy)”, następnie po wywołaniu okna Edycja wyrażenia filtra
należy z rozwijalnej listy w miejscu operator wybrać zawiera, a
następnie zaznaczyć parametr Pytaj o wartość i podać tytuł zapytania
np. Podaj nazwę odbiorcy i zatwierdzić wpis. Logiczna reprezentacja
utworzonego w ten sposób wyrażenia filtrującego jest wyświetlana w
dolnej części okna może wyglądać np.

TrN_OdbNazwa1 LIKE '%' + ?@S100|Podaj nazwę:'' + '%'.

W oknie Konstruktor filtra podać nazwę filtra.

Jak wyfiltrować dokumenty PA, które zostały skorygowane w całości?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select t.TrN_ZwrID from CDN.TraNag t where t.TrN_ZwrId =
A.TrN_TrNID and t.TrN_Bufor=0 and (t.TrN_Rodzaj=305001 or
t.TrN_Rodzaj=305005) group by t.TrN_ZwrID having
SUM(t.Trn_RazemBrutto)*(-1)= A.Trn_RazemBrutto)

Jak wyfiltrować dokumenty RO, które mają oraz nie mają powiązania z
dokumentami PWP?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:
a) mają powiązanie z dokumentami PWP:

EXISTS(SELECT TrN_TrNId FROM CDN.TraNag WHERE TrN_RelTrNId =
A.TrN_TrNId AND TrN_TypDokumentu = 317)
b) nie mają powiązania z dokumentami PWP:

NOT EXISTS (SELECT TrN_TrNId FROM CDN.TraNag WHERE TrN_RelTrNId =
A.TrN_TrNId AND TrN_TypDokumentu = 317)

Jak wyfiltrować na liście RO dokumenty, wg numeru obcego zamówienia?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

TrN_NumerObcy=?@S100|Nr zamówienia:''

Jak wyfiltrować dokumenty wg kontrahentów dla pola Nabywca?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT KnT_KntID, Knt_kod from
CDN.kontrahenci)|kontrah|&kontrah:REG= @? PAR@
Trn_PodID=??kontrah

Jak wyfiltrować dokumenty wg kontrahentów dla pola Odbiorca?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKNTLISTA())|kod|&kod:REG=!NIEOKREŚLONY!
@? PAR@
TrN_OdbiorcaTyp = 1 AND TrN_OdbId = ??kod

Jak wyfiltrować listę dokumentów zawierających dany atrybut dokumentu?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_TWR.DLL|CALLLOOKUPATRLISTADOK())|atr|&atr:REG= @? PAR@
exists (select * from CDN.DokAtrybuty where DAt_TrNId = TrN_TrNId and
DAt_DeAId = ??atr)

Jak wyfiltrować listę dokumentów posiadających dany atrybut dokumentu,
którego wartość zawiera podany przez użytkownika tekst?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_TWR.DLL|CALLLOOKUPATRLISTADOK())|atr|&atr:REG= @? PAR@
@PAR ?@S50|tekst_atrybutu|&tekst_atrybutu:REG= @? PAR@ exists (select
* from CDN.DokAtrybuty where DAt_TrNId = TrN_TrNId and DAt_DeAId =
??atr and DAt_WartoscTxt Like '%'+??tekst_atrybutu+'%')

Jak wyfiltrować transakcje, gdzie na pozycjach użyto atrybutu (bez
podawania wartości tego atrybutu)?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(SELECT [DeA_DeAId], [DeA_Kod], [DeA_Nazwa] FROM
[CDN].[DefAtrybuty] WHERE [DeA_Typ]= 1|GENERICLOOKUP(Atrybuty towarów,
0, 1))|Atrybut|&Atrybut: @? @MSG(Wybór z listy) @TIP(Wybór z listy)
PAR@
EXISTS(
SELECT [TrE_TrNId]
FROM [CDN].[TraElem] JOIN [CDN].[TraElemAtr] ON [TrE_TrEID] = [TrA_TrEId] AND
[TrE_TrNId] = [A].[TrN_TrNID]
WHERE [TrA_DeAId]=??Atrybut)

Jak wyfiltrować transakcje, gdzie na pozycjach użyto atrybutu z
określoną wartością?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(SELECT [DeA_DeAId], [DeA_Kod], [DeA_Nazwa] FROM
[CDN].[DefAtrybuty] WHERE [DeA_Typ]= 1|GENERICLOOKUP(Atrybuty towarów,
0, 1))|Atrybut|&Atrybut: @? @MSG(Wybór z listy) @TIP(Wybór z listy)
PAR@
@PAR ?@S100|Wartosc|&Wartość: @? @MSG(Wartość atrybutu) @TIP(Wartość
atrybutu) PAR@
EXISTS(
SELECT [TrE_TrNId]
FROM [CDN].[TraElem] JOIN [CDN].[TraElemAtr] ON [TrE_TrEID] = [TrA_TrEId] AND
[TrE_TrNId] = [A].[TrN_TrNID]
WHERE [TrA_DeAId]=??Atrybut
AND [TrA_Wartosc]=??Wartosc)

Jak wyfiltrować dokumenty do których nie były wykonane korekty?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

not exists (select t.TrN_ZwrID from CDN.TraNag t where t.TrN_ZwrId =
A.TrN_TrNID)

Jak wyfiltrować dokumenty wystawione w dniu dzisiejszym ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

TrN_DataDok = {DateSQL(Today())}

Jak wyfiltrować dokumenty po wybranej formie płatności?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = FPl_FPlId, Kod = FPl_Nazwa From
CDN.FormyPlatnosci)|formy_platnosci|&formy_platnosci:REG= @? PAR@
TrN_FPlId = ??formy_platnosci

Jeżeli chodzi nie tyle o konkretną formę płatności co o typ formy
płatności to należałoby odwołać się do tabeli CDN.FormyPlatnosci.
Wyrażenie:

EXISTS(SELECT * FROM CDN.FormyPlatnosci WHERE FPl_FPlId = TrN_FPlId
AND FPl_Typ=1)
wpisane w polu Filtr SQL wyfiltruje dokumenty, które mają formę
płatności o typie "gotówka".
FPl_Typ=2 - typ formy płatności "przelew".
FPl_Typ=3 - karta kredytowa

Jak wyfiltrować listę dokumentów po kategorii dokumentu ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:REG=-brak-
@? PAR@ TrN_KatID = ??Kategoria

Jak wyfiltrować listę dokumentów po kategorii elementu?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|Kategoria|&Kategoria:REG=
@?TIP(Wybierz kategorię) PAR@ exists (select * from CDN.TraElem where
Trn_TrnId=Tre_TrnId and Tre_KatId = ??kategoria)

Jak wyfiltrować listę dokumentów aby wyświetlały się wszystkie
dokumenty oprócz tych w buforze, korekt i anulowanych?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

IsNull(TrN_Korekta,0)=0 AND TrN_Bufor=0

Jak wyfiltrować dokumenty, na których występują towary/ usługi z
określonej grupy towarowej?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPTWGLISTA())|grupa|&grupa:REG= @? PAR@
exists( SELECT TrE_TrEID FROM CDN.TraElem JOIN CDN.Towary ON TrE_TwrID
= Twr_TwrID WHERE TrE_TrNID = A.TrN_TrNID AND Twr_TwGGIDNumer=??grupa
)

Jak wyfiltrować dokumenty wg. daty wystawienia oraz dowolnego
fragmentu numeru pełnego dokumentu?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|Data|&Data wystawienia:REG=75828 @? PAR@ @PAR
?@S20|wartosc|&Podaj wartosc:REG= @? PAR@
TrN_NumerPelny LIKE '%' + ??wartosc+'%' and TrN_DataWys=??Data

Jak wyfiltrować dokumenty, gdzie występują elementy z określoną cechą
i wartością?

Dla cech typu data, do pola wartość należy wpisać datę wg formatu
RRRR-MM-DD. Żaden inny format nie będzie rozpoznany przez filtr.
Zapytanie należy wpisać z poziomu konstruktora filtra, bezpośrednio na
zakładce Zaawansowane, w polu Filtr SQL:

@PAR ?@LS20(OP_TWR.DLL|CALLLOOKUPATRLISTATWR())|CechaID|&Cecha: @?
@MSG(Wybór z listy) @TIP(Wybór z listy) PAR@
@PAR ?@S255|CechaWartosc|&Wartość: @? @MSG(Wartość cechy) @TIP(Wartość
cechy) PAR@
EXISTS( SELECT TrE_TrEID FROM [CDN].[TraElem] JOIN
[CDN].[TraSElemDost] ON [TrE_TrEID] = [TsD_TrEID] WHERE TrE_TrNID =
A.TrN_TrNID AND (
(ISNULL([TsD_Cecha1_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha1_Format] = 4 AND [TsD_Cecha1_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha1_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha1_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha2_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha2_Format] = 4 AND [TsD_Cecha2_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha2_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha2_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha3_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha3_Format] = 4 AND [TsD_Cecha3_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha3_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha3_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha4_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha4_Format] = 4 AND [TsD_Cecha4_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha4_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha4_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha5_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha5_Format] = 4 AND [TsD_Cecha5_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha5_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha5_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha6_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha6_Format] = 4 AND [TsD_Cecha6_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha6_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha6_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha7_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha7_Format] = 4 AND [TsD_Cecha7_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha7_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha7_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha8_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha8_Format] = 4 AND [TsD_Cecha8_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha8_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha8_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha9_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha9_Format] = 4 AND [TsD_Cecha9_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha9_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha9_Wartosc]
END = ??CechaWartosc)
OR (ISNULL([TsD_Cecha10_DeAId], 0) = ??CechaID AND CASE WHEN
([TsD_Cecha10_Format] = 4 AND [TsD_Cecha10_Wartosc] <> '') THEN
CONVERT(VARCHAR(10), DATEADD("day", CONVERT(INT,
[TsD_Cecha10_Wartosc]), '1800-12-28'), 21) ELSE [TsD_Cecha10_Wartosc]
END = ??CechaWartosc)
))

Filtr można zastosować również na liście zasobów, wówczas należy
zmodyfikować w wyrażeniu WHERE relacje po polach TrE_TwrId=A.Twr_TwrId

Jak wyfiltrować listę zasobów/cennik tylko do tych towarów które są
powiązane z dostawcą (zdefiniowany kontrahent na karcie towaru
zakładka Dodatkowe pole Dostawca)?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKNTLISTA())|KontrahentId|&Kontrahenci:REG=’!NIEOKREŚLONY!’
@? PAR@
Twr_KntId = ??KontrahentId

Jak wyfiltrować na liście dokumentów PZ, dokumenty nie powiązane z FRR?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

not exists (select trr_trrid from cdn.tranagrelacje where trn_trnid =
trr_trnid and trr_fatyp = 301) or trn_faid not in (select trn_trnid
FROM CDN.TraNag JOIN cdn.TraNagRelacje ON TrN_TrNId = TrR_TrNId where
TrR_TrNId = TrN_TrNID and TrR_FaTyp=350)

Jak wyfiltrować na liście dokumentów PZ, dokumenty powiązane z FRR?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select trr_trrid from cdn.tranagrelacje where trn_trnid =
trr_trnid and trr_fatyp = 301) and trn_faid in (select trn_trnid FROM
CDN.TraNag JOIN cdn.TraNagRelacje ON TrN_TrNId = TrR_TrNId where
TrR_TrNId = TrN_TrNID and TrR_FaTyp=350)

Jak wyfiltrować na liście dokumentów RO, dokumenty ze statusem w
Realizacji do których wygenerowano dokument FA bez WZ?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from cdn.tranagrelacje where TrR_FaTyp = 302 and
trn_trnid = trr_trnid and trn_zwroconocalailosc = 2)

Jak wyfiltrować na liście faktur sprzedaży, dokumenty korekt
ilościowych do dokumentów pierwotnych, które nie zostały
przekształcone do dokumentu PW?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

not exists (select * from CDN.TraNagRelacje where TrR_TrNId =
TrN_TrNID and (TrR_FaTyp=303 or TrR_FaTyp=306) and trn_rodzaj =
302101) and trn_rodzaj = 302101

Jak wyfiltrować na liście faktur, faktury zaliczkowe które nie mają
skojarzonych faktur finalnych?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Trn_TrnId not in ( select A.TrR_FaId from cdn.tranagrelacje B left
outer join cdn.Tranag T on TrR_TrNID = T.TrN_TrNID left outer join
cdn.TraNagRelacje A on B.TrR_FaId = A.TrR_TrNId where B.TrR_FaTyp =
320 AND TrN_Rodzaj in (302009, 302004)) and trn_rodzaj = 302200

Wyszukiwanie dokumentów z konkretnej dostawy. Filtr działa na liście
WZ, wyświetli te dokumenty WZ, które rozchodowują towar z konkretnego
(wskazanego w filtrze) PZ.

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@S30|numer|&numer:REG= @? PAR@
exists (select * from CDN.TraNag TRN2, CDN.TraElem TRE1, CDN.TraElem
TRE2, CDN.TraSElem TRS1, CDN.TraSElem TRS2 where
A.TrN_TrNID=TRE1.TrE_TrNID and TRS1.TrS_TrEId=TRE1.TrE_TrEID and
TRS1.TrS_TrSIdDost=TRS2.TrS_TrSId and TRS2.TrS_TrEId = TRE2.TrE_TrEID
and TRE2.TrE_TrNId=TRN2.TrN_TrNID and TRN2.TrN_NumerPelny like
'%'+??numer+'%')

Wyszukiwanie dokumentów z konkretnych wydań. Filtr dla listy
dokumentów PZ, po wskazaniu numeru dokumentu WZ wyświetli dokumenty PZ
którymi towar z WZ został przyjęty.

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@S30|numer|&numer:REG= @? PAR@
exists (select * from CDN.TraNag TRN2, CDN.TraElem TRE1, CDN.TraElem
TRE2, CDN.TraSElem TRS1, CDN.TraSElem TRS2 where
A.TrN_TrNID=TRE1.TrE_TrNID and TRS1.TrS_TrEId=TRE1.TrE_TrEID and
TRS1.TrS_TrSId=TRS2.TrS_TrSIdDost and TRS2.TrS_TrEId = TRE2.TrE_TrEID
and TRE2.TrE_TrNId=TRN2.TrN_TrNID and TRN2.TrN_NumerPelny like
'%'+??numer+'%')

Jak wyfiltrować towary z ceną domyślną w walucie np. EUR?

W menu Ogólne/ Cennik, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select * from CDN.TwrCeny where TwC_TwrID=Twr_TwrId and
TwC_TwCNumer=Twr_TwCNumer and TwC_Waluta='EUR')

Jak wyfiltrować towary z określonym kodem CN na liście cennikowej?

Należy założyć filtr zaawansowany który będzie korzystał z tabeli
CDN.KodyCN. Filtr będzie wyglądał tak:

@PAR ?@R(SELECT KCN_KcNID, KCN_Kod From CDN.KodyCN)|Kody_CN|&Kody CN: @? PAR@
Twr_KCNID = ??Kody_CN

Jak wyfiltrować towary, które nie mają ustalonego kodu CN?

W menu Ogólne/ Cennik, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

Twr_KCNID is null

Jak wyfiltrować towary, które nie mają ustalonego kraju pochodzenia?

W menu Ogólne/ Cennik, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

Twr_KrajPochodzenia = ''

Jak wyfiltrować towary, które nie mają wprowadzonej wagi lub waga jest zerowa?

W menu Ogólne/ Cennik, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

Twr_WagaKG is null or Twr_WagaKG = 0

Jak wyfiltrować towary z przypisaną jedną grupą?

W menu Ogólne/ Cennik, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select count (TwG_Kod) from CDN.TwrGrupy Where TwG_GIDTyp = 16
and TwG_GIDNumer = Twr_TwrId Group by TwG_Kod Having count (TwG_Kod)
=1)

Jak wyfiltrować Dokumenty WZ mające powiązanie (bądź nie mające
powiązania) z Fakturą Sprzedaży?

W menu Handel/ Wydania zewnętrzne, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:
– w celu znalezienia dokumentów WZ mających powiązanie z fakturą:

exists (select * from CDN.TraNagRelacje where TrR_TrNId = TrN_TrNID
and TrR_FaTyp=302)

– w celu znalezienia dokumentów WZ nie mających powiązania z fakturą:

not exists (select * from CDN.TraNagRelacje where TrR_TrNId =
TrN_TrNID and TrR_FaTyp=302)

Jak wyfiltrować Dokumenty WZ powiązane z Fakturami Sprzedaży i
Paragonami, gdzie daty wystawienia dokumentów handlowych znajdują się
w podanym przedziale?

W menu Handel/ Wydania zewnętrzne, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@D17|data_od|&data od:REG={Today()} @? PAR@
@PAR ?@D17|data_do|&data do:REG={Today()} @? PAR@
Exists (select * from CDN.TraNag Z where A.TrN_FaId = Z.TrN_TrNID and
Z.TrN_DataWys>= ??data_od and Z.TrN_DataWys <= ??data_do and
A.Trn_TypDokumentu=306 and (Z.TrN_TypDokumentu=302 or
Z.TrN_TypDokumentu=305)) Druga wersja filtra z wykorzystaniem tabeli
CDN.TraNagRelacje: @PAR ?@D17|data_od|&data od:REG={Today()} @? PAR@
@PAR ?@D17|data_do|&data do:REG={Today()} @? PAR@ exists(select * from
CDN.TraNagRelacje join CDN.TraNag Z on Trr_faid = z.trn_trnid where
TrR_TrNId = A.TrN_TrNID and TrR_FaTyp in (302,305) and Z.TrN_DataWys>=
??data_od and Z.TrN_DataWys
<= ??data_do)

Jak na liście dokumentów WZ ukryć te mające powiązania z Fakturą
Sprzedaży/Fakturą korygującą, które zostały całkowicie zwrócone?

W menu Handel/ Wydania zewnętrzne, w Konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

TrN_TrNID NOT IN (SELECT TrR_TrNID FROM CDN.TraNagRelacje WHERE
TrR_FaTyp IN (302)) AND TrN_TrNID NOT IN ( SELECT Zrd.Tre_TrNID from
CDN.TraElem [Kor] LEFT JOIN CDN.TraElem [Zrd] on Kor.TrE_ZwrId =
Zrd.TrE_TrEId WHERE Kor.TrE_Aktywny <> 0 AND Zrd.TrE_TypDokumentu =
306 GROUP BY Zrd.TrE_TrNID, Zrd.TrE_Ilosc HAVING Zrd.Tre_Ilosc +
SUM(Kor.Tre_Ilosc) <= 0) AND TrN_Korekta = 0 AND TrN_Anulowany = 0

Jak wyfiltrować dokumenty po opisie pozycji?

Na liście dokumentów w module Handel/Faktury w Konstruktorze filtra na
zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@ABC(' ')@? PAR@
@PAR ?@LS20(SELECT Tre_TrnId, TrE_TwrOpis AS [Opis], TrE_TwrKod AS
[Kod], TrE_TwrNazwa AS [Nazwa] FROM CDN.TraElem
WHERE REPLACE(REPLACE(REPLACE(REPLACE(TrE_TwrOpis,CHAR(13),''),
char(10),''),CHAR(9), ''),' ','') <> '' AND TrE_TypDokumentu = 302
ORDER BY TrE_TwrOpis |GENERICLOOKUP(Towary z opisem na dokumencie, 0,
1))|TwrOpis|&Opis Towaru:| 6@? PAR@
Trn_TrnId = ??TwrOpis

CRM

Jak wyfiltrować listę kontaktów/ zadań aby widoczne były CRM-y
zmodyfikowane danego dnia?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|data|&Data:REG={Today()} @? PAR@
FLOOR(CONVERT(DECIMAL(14,4), CRK_TS_MOD)) =
FLOOR(CONVERT(DECIMAL(14,4), CONVERT(DATETIME,??data ,120)))

Jak zrobić aby właściciel firmy na liście kontaktów i zadań widział
swoje zadania i zadań podwładnych, natomiast podwładni widzą tylko i
wyłącznie swoje zadania ?

W Konfiguracji/ Program/ Użytkowe/ Parametry należy zaznaczyć parametr
Stosuj filtry obowiązkowe.
Na zakładce Opcje w Typie filtra należy zaznaczyć Obowiązkowy oraz z
menu wybrać akronim Operatora.
Do zadania może być przypisany pracownik lub operator. W bazie danych
ID pracownika jak i operatora może być takie samo albo różne, dlatego
w filtrze można wykorzystać również pole CRK_OpiekunTyp gdzie typ=8 to
operator a typ =3 to pracownik.
W polu Filtr SQL można wpisać:

CRK_OpiekunId= {OperatorID} and CRK_OpiekunTyp =8

Gdzie {OperatorID} oznacza ID operatora aktualnie zalogowanego.
Na zakładce [Opcje] w Typie filtra należy zaznaczyć Obowiązkowy oraz z
menu wybrać akronim Operatora.

Obieg dokumentów

Jak wyfiltrować w bibliotece dokumentów wszystkie dokumenty które nie
mają powiązań z transakcjami ?

Będą to zarówno dokumenty firmowe, jak i wspólne (te z zasady nie są
kojarzone z innymi transakcjami). Tak więc ewentualnie należy
dodatkowo zawęzić listę dokumentów tylko do firmowych (parametr na
liście).
Zapytanie należy wpisać z poziomu konstruktora filtra, bezpośrednio na
zakładce [Zaawansowane], w polu Filtr SQL.

not exists (select * from CDN.DokRelacje Z where A.Dnv_DonId =
Z.Dor_ParentId and Z.Dor_ParentTyp = 750)

Jak wyfiltrować dokumenty z biblioteki dokumentów, które są na zadanym
etapie realizacji (etap bieżący) i etap ten jest etapem głównym?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = SE_SEID, Kod = SE_Symbol From
{OPBK()}.CDN.SekEtapy Order By
SE_Symbol )|EtapID|&Etap:1 @? PAR@
exists (select * from CDN.DokNagProcesEtapy, CDN.DokNagEtapy where
DNV_DoNID=DnPr_DoNID and DnPr_DnPrID=DnE_DnPrID and
DnE_EtapID=??EtapID and A.DNV_EtapBiezacyLp=DnPr_Lp and DnPr_Poziom=1)

Jak wyfiltrować dokumenty z biblioteki dokumentów, które są na zadanym
etapie realizacji (etap bieżący)?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = SE_SEID, Kod = SE_Symbol From
{OPBK()}.CDN.SekEtapy Order By
SE_Symbol )|EtapID|&Etap:1 @? PAR@
exists (select * from CDN.DokNagProcesEtapy, CDN.DokNagEtapy where
DNV_DoNID=DnPr_DoNID and DnPr_DnPrID=DnE_DnPrID and
DnE_EtapID=??EtapID and A.DNV_EtapBiezacyLp=DnPr_Lp)

Jak wyfiltrować dokumenty z biblioteki dokumentów, które w schemacie
mają zadany etap realizacji?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT ID = SE_SEID, Kod = SE_Symbol From
{OPBK()}.CDN.SekEtapy Order By
SE_Symbol )|EtapID|&Etap:1 @? PAR@
exists (select * from CDN.DokNagProcesEtapy, CDN.DokNagEtapy where
DNV_DoNID=DnPr_DoNID and DnPr_DnPrID=DnE_DnPrID and
DnE_EtapID=??EtapID)

Księgowość i Środki Trwałe

Jak wyfiltrować z rejestrów VAT faktury, które mają datę deklaracji
VAT-7 inną niż rejestr VAT?

W Rejestrze (zakupu lub sprzedaży) VAT, w Konstruktorze filtra, na
zakładce: [Zaawansowane]należy wpisać w polu Filtr SQL:

Van_RokMies<>Van_DeklRokMies

Filtr zastosowany z zakładki Rejestr VAT, zakres dat: od 2018/01/01 do
2018/01/31 pozwoli wyświetlić np. fakturę wystawioną 5 stycznia 2018,
a mającą wejść na deklarację w lutym 2018.

Przeglądam dokumenty RVAT za pierwszy kwartał, chciałbym wyfiltrować
te, które są rozliczane w deklaracjach za następne miesiące. Jak mogę
to wykonać?

Polem odpowiedzialnym za rozliczenie wpisu w deklaracji za dany
miesiąc to pole: VaN_DeklRokMies. Pole to agreguje w postaci liczby
całkowitej rok oraz miesiąc, np.: dokument przeznaczony do rozliczenia
w deklaracji za kwiecień 2018 będzie w tym polu posiadał wpis : 201804
Możemy, więc wprowadzić filtr zaawansowany , który będzie
wykorzystywał to pole wpisując w polu Filtr SQL:

@PAR ?@D17|DATA_OD|&Od :{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DATA_DO|&Do :{DateClwFirstDay('m')} @? PAR@
YEAR(??DATA_OD ) * 100 + MONTH(??DATA_OD) <=VaN_DeklRokMies and
YEAR(??DATA_DO ) * 100 + MONTH(??DATA_DO) >=VaN_DeklRokMies

Filtr przed uruchomieniem będzie odpytywał o daty określające
przedział – Od i Do. – z wskazanej daty znaczenie będą miały jedynie
miesiąc oraz rok.

Czy można utworzyć filtr dla Rejestru VAT po akronimie pracownika
wybranego na formatce faktury na zakładce Kontrahent?

W polu Filtr SQL można wpisać:

VaN_PodZalId=(select Pre_PreID from cdn.pracetaty where Pre_kod like
?@S100|Akronim pracownika:'') AND VaN_PodmiotZalTyp=3

Przed odfiltrowaniem listy program będzie pytał o akronim pracownika.
Można również posłużyć się deklaracją parametru dynamicznego i
przekazać do zapytania kod pracownika wyświetlony na liście – w polu
Filtr SQL wpisujemy:

@PAR ?@LS20(OP_PRCW.DLL|CALLLOOKUPPRILISTA())|pracownik|&pracownik:REG= @? PAR@
VaN_PodZalId=??pracownik AND VaN_PodmiotZalTyp=3

Jak z listy rejestru VAT odfiltrować te faktury, które są
nierozliczone lub rozliczone częściowo i dodatkowo forma płatności
jest różna od gotówki?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.BnkZdarzenia where VaN_VaNID=BZd_DokumentID
and (Bzd_Kwota<>Bzd_KwotaRoz)) AND VaN_FplID<>1

Jak w Rejestrach VAT wyfiltrować faktury z podaną kategorią tak aby
wyfiltrowaną listę można było zaznaczyć i zaksięgować?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|Kategoria|&Kategoria: @? PAR@
VaN_KatId = ??Kategoria

Program będzie pytał o kategorię przed filtrowaniem i dodatkowo będzie
ją można wybrać z listy kategorii. Po zawężeniu listy zaznaczamy
faktury np. kombinacją klawiszy CTRL + A i księgujemy wybranym
schematem.

Jak wyfiltrować faktury w Rejestrach VAT zawierające kategorie
szczegółowe należące do zadanej kategorii ogólnej?

a) dla kategorii nagłówka dokumentu:
W konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select Kat_KodOgolny, Kat_KodSzczegol from cdn.kategorie where
VaN_KatID=Kat_KatID AND Kat_KodOgolny=?@S100|Kategoria ogólna:'')

b) dla kategorii wybranych w elementach faktury VAT (kategorie przy
poszczególnych stawkach VAT):
W konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

Exists (select * from cdn.vattab Join cdn.kategorie on vat_katid =
kat_katid where vat_vanid = van_vanid and
Kat_KodOgolny=?@S100|Kategoria ogólna:'')

Jak wyfiltrować w Rejestrach VAT listę faktur całkowicie rozliczonych
i zakwalifikowanych do danej deklaracji VAT-7?

Taka lista może być potrzebna tym firmom, które potrzebują ustalić
wartość zapłaconych Faktur Zakupu dla potrzeb ustalenia kwoty VAT do
zwrotu na rachunek bankowy podatnika.
Aby zrobić wydruk takich faktur, należy:
1. Zbudować filtr: na zakładce [Zaawansowane] w Konstruktorze filtra w
polu Filtr SQL należy wpisać:

VaN_DeklRokMies=?@N-15.4|Rok i miesiąc VAT-7:0

2. Na zakładce Rejestr VAT w Rejestrach VAT, zawęzić listę faktur, za
pomocą ww. filtra, do tych które są zakwalifikowane tylko do
deklaracji np. listopadowej (gdy przed odfiltrowaniem listy program
zapyta o rok
i miesiąc deklaracji – wpisać: 201811).
3. Wykonać odpowiedni wydruk dokumentów rozliczonych z menu wydruków.
Listę faktur można uzyskać również bezpośrednio na ekranie.
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

exists (select * from CDN.BnkZdarzenia where VaN_VaNID=BZd_DokumentID
AND BZd_DokumentTyp=2 AND (BZd_KwotaSys=BZd_KwotaRozSys) AND
VaN_DeklRokMies=?@N-15.4|Rok i miesiąc VAT-7:0)

Przed filtrowaniem program pyta o datę deklaracji VAT-7 – należy
wpisać rok i miesiąc w formacie np. 201611. Tak wyfiltrowanej listy
nie da się wydrukować ze względu na składnię filtra, ale można ją
wysłać do arkusza Excel.

Jak wyfiltrować listę faktur po kolumnie KPiR, do której dokumenty
mają być zaksięgowane?

Na liście faktur w rejestrze VAT, w konstruktorze filtra, na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT Id = 1, Kod = 'Sprzedaż' UNION SELECT Id = 2, Kod =
'Pozostałe' UNION SELECT Id = 3, Kod = 'Towary' UNION SELECT Id = 4,
Kod = 'Uboczne' UNION SELECT Id = 5, Kod = 'Reklama' UNION SELECT Id =
6, Kod = 'Wynagrodzenia' UNION SELECT Id = 7, Kod = 'Inne' UNION
SELECT Id = 8, Kod = 'Zaszłości')|Kolumna|&Kolumna: @? PAR@
exists (Select * From CDN.VatTab Where VaT_VaNID = VaN_VaNId And
VaT_KolumnaKPR = ??Kolumna )

Filtr ma taką właściwość, że jeśli jest jakiś zapis, który ma być
zaksięgowany w części do jednej kolumny,
a w części do innej, to na liście widać go w pełnej kwocie, a na
wydruku w kwocie do zaksięgowania do wskazanej kolumny.

Jak uzyskać listę transakcji nierozliczonych, pochodzących z Rejestru
VAT, na danym koncie rozrachunkowym?

W menu Księgowość/Księgowość/ Dzienniki, zakładka Konto, należy wybrać
odpowiednie konto, a w Konstruktorze filtra, na zakładce Zaawansowane,
w polu Filtr SQL wpisać:

exists(select * from CDN.VatNag join CDN.BnkZdarzenia on
VaN_VaNID=BZd_DokumentID where VaN_DekID=DeN_DeNId AND
Bzd_DokumentTyp=2 AND (Bzd_Kwota-Bzd_KwotaRoz<>0)) OR exists(select *
from CDN.VatNag join CDN.TraNag on TrN_VaNId=VaN_VaNID join
CDN.BnkZdarzenia on TrN_TrNID=BZd_DokumentID where VaN_DekID=DeN_DeNId
AND Bzd_DokumentTyp=1 AND (Bzd_Kwota-Bzd_KwotaRoz<>0))

Filtr zawęzi listę do tych dekretów, które pochodzą z Rejestru VAT
(zostały wprowadzone bezpośrednio do Rejestru VAT lub przesłane z
modułu FA i zaksięgowane z Rejestru VAT) i nie są rozliczone lub są
rozliczone częściowo.

Jak sprawdzić czy poprawnie wprowadzono Kwoty dodatkowe na fakturach w
Rejestrze VAT?

Jeżeli jest jakaś reguła np. zwykle na Fakturach Zakupu
rozksięgowujemy kwotę netto na różne konta „czwórek” czy „piątek” i
suma księgowań po stronie Wn ma się równać kwocie netto dokumentu, to
można zbudować filtr, który będzie wyświetlał faktury nie spełniające
tego warunku.
W Konstruktorze filtra, na zakładce [Zaawansowane] należy wpisać:

not exists (select * from CDN.KwotyDodatkowe where
Kdd_DokumentID=VaN_VaNID AND KDD_DokumentTyp=2 AND Kdd_Segment1<>''
having SUM(Kdd_Kwota) = VaN_RazemNetto)

Zostaną wyfiltrowane wszystkie pozycje różne od tych, na których suma
kwot dodatkowych WN jest równa kwocie netto faktury.

Jak wyfiltrować środki trwałe aktywne, całkowicie umorzone?

Poniżej przykład filtra, który wyświetli środki trwałe aktywne,
których wartość bieżąca bilansowa minus odpisy umorzeniowe = 0. Filtr
nie uwzględnia historyczności i bierze pod uwagę tylko amortyzację
bilansową.

SrT_Stan=0 and SrT_WartoscBilan + ( Select IsNull(Sum( SrH_KwotaBilan
- SrH_KwotaUm ), 0) From CDN.TrwaleHist Where SrH_SrTId = SrT_SrTId
And SrH_TypDokumentu<>4) = 0

Jak w dziennikach księgowych wyfiltrować dekrety, których dokumenty
źródłowe były płatne gotówką?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
można wpisać:

exists (select * from CDN.TraNag where
DeN_DeNId = TrN_DekId and TrN_FPlId=1) OR exists(select * from
CDN.VatNag where DeN_DeNId=VaN_DekID AND VaN_FplID=1)
TrN_FPlId=1 i VaN_FplID=1 oznacza formę płatności o ID 1. Standardowo
jest to forma płatności o nazwie „gotówka”.

Jak wyfiltrować różnice kursowe, które powstały z rozliczenia
dokumentów innych niż te pochodzące z Ewidencji dodatkowej?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

''=''AND(BRK_LDokTyp='1' AND exists(select*from CDN.BnkZdarzenia where
BRK_LDokID=Bzd_BzdID and BZd_DokumentTyp<>12))OR(BRK_PDokTyp='1' AND
exists(select*from CDN.BnkZdarzenia where BRK_PDokID=Bzd_BzdID and
BZd_DokumentTyp<>12))

Powyższy filtr wyświetli różnice kursowe, na których co najmniej jeden
z dokumentów nie pochodzi z Ewidencji dodatkowej. Wyfiltrowane różnice
kursowe można zaznaczyć i zaksięgować.
BRK_LDokTyp=’1′ czyli że typ lewego dokumentu to dokument pochodzący z
tabeli BnkZdarzenia.
BZd_DokumentTyp=1 to typ dokumentu w BnkZdarzenia np.
1 – faktura z modułu Faktury;
12 – faktura z Rejestru VAT;
12 – dokument z Ewidencji dodatkowej;

Jak sprawdzić, która faktura z rejestru zakupów VAT nie została
zaksięgowana na konto VAT’u lub została zaksięgowana, ale kwota VAT z
faktury nie zgadza się z kwotą VAT na koncie?

W Rejestrze zakupów VAT można stworzyć filtr, który wyświetli te
faktury, których suma kwoty VAT nie jest równa kwocie zaksięgowanej na
konto VAT’u. W Konstruktorze filtra, na zakładce [Zaawansowane], w
polu Filtr SQL można wpisać:

VaN_DekId Is Not Null And Not Exists (Select DeK_AccId From
CDN.DekretyKonta Join CDN.Konta On DeK_AccId = Acc_AccId Where
DeK_DeNId = VaN_DekId And Acc_Numer='221-02' And Year(DeK_DataDok)
= Year(VaN_DataZap) And Month(DeK_DataDok) = Month(VaN_DataZap) Group
By DeK_AccId Having Sum(DeK_Kwota) = VaN_RazemVat)

W pole Acc_Numer=’221-2′ należy wpisać numer konta VAT. W przypadku
faktur – korekt na kwoty ujemne, filtr zadziała prawidłowo wtedy, gdy
kwota VAT’u jest księgowana na to samo konto co zwykła faktury i po
tej samej stronie tylko ze znakiem „minus”.

Jak wyfiltrować w dziennikach księgowań PK, które zawierają pozycje
zawierające zadany opis?

W menu Księgowość/ Dzienniki, zakładka [Dzienniki]. W konstruktorze
filtra na zakładce [Zaawansowane] należy wpisać:

@PAR ?@S30|Szukaj|&Szukaj: @? PAR@
DeN_Dokument Like '%'+ ??Szukaj +'%' Or DeN_Kategoria Like '%'+
??Szukaj +'%' Or Exists (Select * From CDN.DekretyElem Where DeE_DeNId
= DeN_DeNId And (DeE_Dokument Like '%'+ ??Szukaj +'%' Or DeE_Kategoria
Like '%'+ ??Szukaj +'%'))

Jak wyfiltrować listę dokumentów rozliczonych pochodzących z Rejestru
VAT lub ewidencji dodatkowej?

Na liście Dokumentów Rozliczonych w menu Kasa/Bank w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select * from cdn.bnkzdarzenia where
(bzd_dokumenttyp=12 and brk_ldoktyp=1 and brk_ldokid = bzd_bzdid) or
(bzd_dokumenttyp=12 and brk_pdoktyp=1 and brk_pdokid = bzd_bzdid) or
(bzd_dokumenttyp=2 and brk_ldoktyp=1 and brk_ldokid = bzd_bzdid) or
(bzd_dokumenttyp=2 and brk_pdoktyp=1 and brk_pdokid = bzd_bzdid))

Jak wyfiltrować Rejestr VAT wg numeru NIP Kontrahenta pod warunkiem,
że dokument nie jest zaksięgowany?

Na liście Rejestru VAT w menu Kasa/Bank w Konstruktorze filtra, na
zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@HO(RY:1|KP:2|KH:3)|TypKsi|&KSI:{GetSql('Select Fir_Wartosc From
CDN.Firma Where Fir_Numer=1204', '')} @? PAR@ {CHOOSE ( ??TypKsi,
'IsNull(VaN_RycId,0)=0', 'IsNull(VaN_KPRId,0)=0',
'IsNull(VaN_DekId,0)=0', '1=1')} and VaN_KntNipE LIKE '%' +
?@S100|numer NIP:'' + '%'

Jak wyfiltrować konta w Planie kont, które mają inny numer w przyszłym okresie?

Na Planie kont w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

exists ( select * from cdn.konta k2 where A.Acc_NextAccId=k2.Acc_AccId
and A.Acc_Numer<>k2.Acc_Numer)

Jak wyfiltrować polecenia księgowania, które zawierają dekrety na
konto 404-1 i 501-01?

Przykład takiego filtra dla zakładki [Dzienniki] w menu
Księgowość/Księgowość/Dzienniki:

exists(select * from CDN.DekretyElem K1 join CDN.DekretyElem K2 on
(DeN_DeNID = K2.DeE_DeNID) where DeN_DeNID = K1.DeE_DeNID and
K1.DeE_KontoWn = '404-1' and K2.DeE_KontoWn = '501-01')

Na fakturze w Rejestrze VAT wpisuję jako wartość atrybutu numer
rejestracyjny samochodu i jako kolejny atrybut – paliwo, jak sprawdzić
ile paliwa zakupiono dla danego samochodu?

Na jednym dokumencie uzupełniono atrybuty REJESTRACJA (nr
rejestracyjny samochodu) i PALIWO (ilość zakupionego paliwa). Poniższe
zapytanie, w Rejestrach VAT, na zakładce [Wg atrybutów], zwróci
rekordy zawierające ilość paliwa dla podanego numeru rejestracyjnego
samochodu. Przed odfiltrowaniem program zapyta o nr rejestracyjny.

exists (select * from CDN.VATAtrybutyView as ATR1 join
CDN.VATAtrybutyView as ATR2 on (ATR1.VAV_VaNID=ATR2.VAV_VaNID and
ATR2.VAV_DeAKod='REJESTRACJA' AND ATR2.VAV_DAtWartoscTxt =?@S100|Nr
rejestracyjny:'') where ATR1.VAV_VaNID=VAN_VaNID and ATR1.VAV_DeAKod =
'PALIWO')

W polu Atrybut można wybrać atrybut PALIWO – wtedy będzie można
podsumować wyfiltrowane rekordy (ilość paliwa).

Jak wyfiltrować dokumenty w rejestrze VAT według wskazanych grup kontrahentów?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT Gru_GruID, Gru_Nazwa FROM cdn.Grupy WHERE
Gru_Typ=31)|Grupa_kontrahentow|&Grupa_kontrahentow:REG= @? PAR@
exists (select * from cdn.kontrahenci where knt_kntID=van_podId and
van_podmiotTyp=1 and knt_grupa=??_Q_RES2_Grupa_kontrahentow)

Jak wyfiltrować faktury z rejestru VAT zaksięgowane pomiędzy podanymi
datami, które zakwalifikowane zostały do deklaracji VAT-7 za podany
okres?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

@PAR ?@D17|data_od|&Data_zapisu_od:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|data_do|&Data_zapisu_do:{DateClwLastDay('m')} @? PAR@
@PAR ?@N4|Rok|&Rok_deklaracji:{Year(Today())} @? PAR@
@PAR ?@N4|Miesiac|&Miesiąc_deklaracji:{Month(Today())} @? @RL(1) @RH(12) PAR@
EXISTS (SELECT * FROM CDN.DekretyNag WHERE VaN_DekId = DeN_DeNId AND
VaN_DekId IS NOT NULL AND VaN_DeklRokMies={100 * ??Rok + ??Miesiac}
AND DeN_DataDok >=??Data_od AND DeN_DataDok <= ??Data_do)
W przypadku stosowania metody kasowej należy użyć poniższego filtra:
@PAR ?@D17|data_od|&Data_zapisu_od:{DateClwFirstDay('m')} @? PAR@ @PAR
?@D17|data_do|&Data_zapisu_do:{DateClwLastDay('m')} @? PAR@ @PAR
?@N4|Rok|&Rok_deklaracji:{Year(Today())} @? PAR@ @PAR
?@N4|Miesiac|&Miesiąc_deklaracji:{Month(Today())} @? @RL(1) @RH(12)
PAR@ EXISTS (SELECT * FROM CDN.DekretyNag WHERE VaN_DekId = DeN_DeNId
AND VaN_DekId IS NOT NULL AND DeN_DataDok >=??Data_od AND DeN_DataDok
<= ??Data_do) AND EXISTS ( SELECT * FROM CDN.VatTab7 WHERE
Va7_VaNID=VaN_VaNID AND Va7_RokMiesiac={100 * ??Rok + ??Miesiac} AND
VaN_MetodaKasowa=1)

Jak wyfiltrować środki trwałe mające określony atrybut?

Na liście środków trwałych w konstruktorze filtra na zakładce
[Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT ID = DeA_DeAId, Kod = DeA_Kod FROM CDN.DefAtrybuty
WHERE DeA_Typ=3 ORDER BY DeA_Kod)|KodAtr|&Kod atrybutu:ATR1 @? PAR@
EXISTS (SELECT * FROM CDN.TrwaleAtrybuty JOIN CDN.DefAtrybuty ON
SrA_DeAId = DeA_DeAId WHERE SrT_SrTID = SrA_SrTId AND DeA_DeAId
=??KodAtr)

Jak wyfiltrować dokumenty w rejestrze VAT, które zostały wprowadzone
lub zmodyfikowane po konkretnej dacie?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

@PAR ?@D17|data_od|&Data_wprowadzenia_lub_modyfikacji:{DateClwFirstDay('m')}
@? PAR@
VaN_TS_Zal >= ??data_od OR VaN_TS_Mod >= ??data_od

Jak wyfiltrować dokumenty w Rejestrze VAT posiadające określony atrybut?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

@PAR ?@LS20(OP_TWR.DLL|CALLLOOKUPATRLISTADOK())|Atrybut|&Atrybut:REG=
@? PAR@ exists (select * from CDN.DokAtrybuty where VaN_VaNID =
DAt_VaNID and DAt_DeAId = ??Atrybut)

Jak wyfiltrować dokumenty w Rejestrze VAT posiadające określoną
wartość atrybutu?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

@PAR ?@S30|Wartosc_atrybutu|&Wartosc_atrybutu:''@? PAR@
exists (select * from CDN.DokAtrybuty where VaN_VaNID = DAt_VaNID and
DAt_WartoscTxt
= ??Wartosc_atrybutu)

Jak wyfiltrować dokumenty w Rejestrze VAT, które mają nie zaznaczonego
parametru Rozliczać w deklaracji VAT?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

VaN_RozliczacVat7 = 0

Jak znaleźć zapisy w Rejestrze VAT, które pod listą zaliczek mają
wybranego jakiegoś pracownika?

W Rejestrze VAT w konstruktorze filtra na zakładce [Zaawansowane], w
polu Filtr SQL należy wpisać:

VaN_PodmiotZalTyp='3’

Jak odnaleźć zapisy księgowe na koncie z daną kategorią w elemencie zapisu?

W menu Księgowość/Dzienniki, zakładka [Konto] w konstruktorze filtra
na zakładce [Zaawansowane] należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|Kategoria|&Kategoria:REG=
@?TIP(Wybierz
kategorię) PAR@ DeE_KatId =??kategoria

Jak odnaleźć zapisy księgowe na koncie z daną kategorią w nagłówku zapisu?

W menu Księgowość/Dzienniki, zakładka [Konto] w konstruktorze filtra
na zakładce [Zaawansowane] należy wpisać:

@PAR ?@LS20(OP_LIST.DLL|CALLLOOKUPKATLISTA())|Kategoria|&Kategoria:REG=-brak-
@? PAR@
DeN_KatId = ??Kategoria

W jaki sposób wyszukać dokumenty środków trwałych w zależności od
osoby odpowiedzialnej przypisanej w zadanym okresie?

Na liście dokumentów środków trwałych w Konstruktorze filtra, na
zakładce [Zaawansowane] należy wpisać:

@PAR ?@D17|data1|&Data od:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|data2|&Data do:{DateClwLastDay('m')} @? PAR@
@PAR ?@R(SELECT distinct Pri_PraId, PRi_nazwisko+' '+pri_Imie1 FROM
cdn.Pracidx where PRI_Typ <>2 order by 2 )|PRACOWNIK|&PRACOWNIK:0|@?
PAR@
Exists (select * from CDN.TrwaleOsobyOdpowiedzialne where
SrH_SrtID=SrOO_SrTID and SrOO_DataOd<=??data1 and (SrOO_DataDo
>=??data2 or SrOO_DataDo is null) and SrOO_PrcID =??PRACOWNIK)

W jaki sposób na liście zapisów w rejestrze VAT (bądź na liście
faktur) wyszukać dokumenty zaksięgowane na konkretne konto?

Na liście zapisów w rejestrze VAT w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@S30|Konto|&Konto:''@? PAR@
EXISTS (SELECT * FROM CDN.DekretyNag join CDN.DekretyElem on
DeN_DeNId=DeE_DeNId WHERE VaN_DekID = DeN_DeNId AND
(DeE_KontoWn=??Konto OR DeE_KontoMa=??Konto))

Filtr do zastosowania na liście faktur:

@PAR ?@S30|Konto|&Konto:''@? PAR@
EXISTS (SELECT * FROM CDN.DekretyNag join CDN.DekretyElem on
DeN_DeNId=DeE_DeNId WHERE TrN_DekId = DeN_DeNId AND
(DeE_KontoWn=??Konto OR DeE_KontoMa=??Konto))

W jaki sposób wyszukać zapisy KPiR zaksięgowane z określonych
dokumentów źródłowych?



Na liście zapisów KPiR w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

@PAR ?@R (SELECT Id = 2, Kod = 'Rejestr VAT' UNION
SELECT Id = 3, Kod = 'Samochodówka' UNION
SELECT Id = 4, Kod = 'Remanent' UNION
SELECT Id = 5, Kod = 'Wynagrodzenia uproszczone' UNION
SELECT Id = 7, Kod = 'Dokumenty ŚT' UNION
SELECT Id = 10, Kod = 'Wynagrodzenia' UNION
SELECT Id = 12, Kod = 'Ewidencja dodatkowa' UNION
SELECT Id = 13, Kod = 'Różnice kursowe' UNION
SELECT Id = 14, Kod = 'Zapisy k/b'
)|Zrodlo|&Zrodlo: @? PAR@
KPR_Zrodlo = ??Zrodlo

W jaki sposób wyszukać zapisy księgowe na koncie mające parę (taką
samą kwotę) po obu stronach konta?

Z poziomu Księgowość/ Dzienniki/ zakładka [Konto] w Konstruktorze
filtra, na zakładce [Zaawansowane] należy wpisać:

@PAR ?@D17|data1|&Data od:{DateClwFirstDay('y')} @? PAR@ @PAR
?@D17|data2|&Data do:{DateClwLastDay('y')} @? PAR@
@PAR ?@S30|Konto|&Konto:''@? PAR@
Exists (Select * From CDN.DekretyElem A Where A.DeE_DeEId=DeK_DeEId
And (Exists (Select * From CDN.DekretyElem B Where A.DeE_Kwota=B.DeE_Kwota
And A.DeE_KontoMa=??Konto and B.DeE_KontoWn=??Konto
AND A.DeE_DataWys between ??data1 And ??data2
AND B.DeE_DataWys between ??data1 And ??data2)
OR Exists (Select * From CDN.DekretyElem B Where A.DeE_Kwota=B.DeE_Kwota
And A.DeE_KontoWn=??Konto and B.DeE_KontoMa=??Konto
AND A.DeE_DataWys between ??data1 And ??data2
AND B.DeE_DataWys between ??data1 And ??data2)))

W jaki sposób na planie kont wyszukać konta rozrachunkowe tego samego
podmiotu, na których istnieją nierozliczone rozrachunki po przeciwnych
stronach?

Z poziomu Księgowość/ Plan kont w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać:

EXISTS( Select * From CDN.Konta B Where
A.Acc_SlownikId=B.Acc_SlownikId And A.Acc_SlownikTyp=B.Acc_SlownikTyp
And A.Acc_Rozrachunkowe = 1 And B.Acc_Rozrachunkowe = 1 AND
A.Acc_NumerIdx IN (SELECT Roz.KRo_KontoIdx FROM CDN.KsiRozrachunki AS
Roz WHERE Roz.KRo_RozliczenieID IS NULL AND Roz.KRo_Strona=1) AND
B.Acc_NumerIdx IN (SELECT Roz.KRo_KontoIdx FROM CDN.KsiRozrachunki AS
Roz WHERE Roz.KRo_RozliczenieID IS NULL AND Roz.KRo_Strona=2))
OR
EXISTS( Select * From CDN.Konta B Where
A.Acc_SlownikId=B.Acc_SlownikId And A.Acc_SlownikTyp=B.Acc_SlownikTyp
And A.Acc_Rozrachunkowe = 1 And B.Acc_Rozrachunkowe = 1 AND
A.Acc_NumerIdx IN (SELECT Roz.KRo_KontoIdx FROM CDN.KsiRozrachunki AS
Roz WHERE Roz.KRo_RozliczenieID IS NULL AND Roz.KRo_Strona=2) AND
B.Acc_NumerIdx IN (SELECT Roz.KRo_KontoIdx FROM CDN.KsiRozrachunki AS
Roz WHERE Roz.KRo_RozliczenieID IS NULL AND Roz.KRo_Strona=1))

Powyższy filtr zadziała w przypadku, gdy jest nierozliczony
rozrachunek po stronie Wn na koncie 201-2-1-ADM
i po stronie Ma na koncie 202-2-1-ADM, chociaż równie dobrze może to
być to samo konto.

W jaki sposób na liście dokumentów w rejestrze VAT wyfiltrować
dokumenty według stanu ich rozliczeń?

Z poziomu rejestru VAT w Konstruktorze filtra, na zakładce
[Zaawansowane] należy wpisać treść filtra odpowiednią dla szukanych
dokumentów:
– wyłącznie dokumenty nierozliczone całkowicie:

not exists (select * from CDN.BnkZdarzenia where VaN_VaNID =
BZd_DokumentID and BZd_DokumentTyp = 2 and (Bzd_KwotaRoz > 0)) AND
VaN_Wewnetrzna = 0

– wyłącznie dokumenty rozliczone częściowo:

exists(select BZd_DokumentID, BZd_DokumentTyp, SUM(BZd_Kwota),
SUM(BZd_KwotaRoz) from cdn.BnkZdarzenia where BZd_DokumentID =
VaN_VaNID AND BZd_DokumentTyp = 2 GROUP BY BZd_DokumentID,
BZd_DokumentTyp HAVING SUM(BZd_Kwota) <> SUM(BzD_KwotaRoz) AND
SUM(BzD_KwotaRoz) > 0.00)

– dokumenty nierozliczone bądź częściowo rozliczone:

exists (select BZd_BZdID FROM CDN.BnkZdarzenia where
VaN_VaNID=BZd_DokumentID and BZd_DokumentTyp = 2 and
(Bzd_Kwota<>Bzd_KwotaRoz))

– wyłącznie dokumenty rozliczone całkowicie:

exists(select BZd_DokumentID, BZd_DokumentTyp, SUM(BZd_Kwota),
SUM(BZd_KwotaRoz) from cdn.BnkZdarzenia where BZd_DokumentID =
VaN_VaNID AND BZd_DokumentTyp = 2 GROUP BY BZd_DokumentID,
BZd_DokumentTyp HAVING SUM(BZd_Kwota) = SUM(BzD_KwotaRoz) AND
SUM(BzD_KwotaRoz) > 0.00)

Płace i Kadry

Jak wyfiltrować pracowników, dla których ważność badań upływa w podanym okresie?

Na liście pracowników w menu Kadry/Płace / Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@D17|DataOd|Podaj datę:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DataDo|Podaj datę:{DateClwLastDay('m')} @? PAR@
exists (select 1 from CDN.PracEtaty where PRI_PraId=PRE_PraId and
PRE_WaznoscBadanOkres between ??DataOd AND ??DataDo)

Przed odfiltrowaniem pojawi się pytanie o daty. Domyślnie podpowiada
się data pierwszego i ostatniego dnia miesiąca.

Jak odfiltrować listę pracowników niepełnosprawnych po kodzie
niepełnosprawności?

Po uruchomieniu filtru pojawi się okno, w którym należy wpisać kod
niepełnosprawności (1,2,3 lub 4) datę tj. dzień, na który chcemy
sprawdzić listę osób niepełnosprawnych (sprawdzane są daty od-do
niepełnosprawności).
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|Data|&Data:{Today()}@? PAR@
exists(select 1 from cdn.pracetaty where pri_praid=pre_praid and
PRE_StNiepelnosp LIKE '%' +
?@S100|Stopień niepełnospr:'' + '%' and ??Data between
pre_niepelnospod and pre_niepelnospdo)

Jak wyfiltrować listę osób mających zawarte umowy cywilno-prawne o
podanym symbolu?

Po uruchomieniu filtru pojawi się okno, w którym należy wpisać zakres
dat (sprawdza datę zawarcia umowy we wskazanym okresie) oraz symbol
umowy (np. UMW).
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|DataOd|Podaj datę:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DataDo|Podaj datę:{DateClwLastDay('m')} @? PAR@
exists (select 1 from CDN.UMOWY where Pri_PraID = UMW_PraID and
umw_numerstring LIKE
'%' + ?@S100|Symbol:'' + '%' and UMW_DataOd between ??DataOd AND ??DataDo)

Jak wyfiltrować z listy pracowników osoby z przypisanym Urzędem
Skarbowym, na wskazany dzień?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|Data|na dzień:{Today()}@? PAR@
exists (select * from CDN.PracEtaty where PRI_Praid=PRE_PraId and
pre_PODUrzSkarbId>0 and
??Data between PRE_DataOd and PRE_DataDo)

Ewentualnie zamiast @D17 można wykorzystać @HD17 jeśli parametr z datą
ma być ukryty (a więc zawsze jako parametr ma się pojawiać data
bieżąca):

@PAR ?@HD17|filtr_dtDataAkt|&filtr_dtDataAkt:{Today()}@? PAR@
exists (select * from CDN.PracEtaty where PRI_Praid=PRE_PraId and
pre_PODUrzSkarbId>0 and
??filtr_dtDataAkt between PRE_DataOd and PRE_DataDo)

Osoby bez przypisanego Urzędu Skarbowego:

@PAR ?@D17|Data|na dzień:{Today()}@? PAR@
not exists (select * from CDN.PracEtaty where PRI_Praid=PRE_PraId and
pre_PODUrzSkarbId>0 and
??Data between PRE_DataOd and PRE_DataDo)

Jak wyfiltrować pracowników, którym wybrana kwalifikacja kończy się w
zadanym zakresie?

Na liście pracowników w menu Kadry/Płace / Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@R(SELECT ID = Dkm_DkmID, Kod = DKM_Nazwa from cdn.DaneKadMod
where dkm_Rodzaj = 6 order by DKM_Nazwa)|Kwalifikacje|&Kwalifikacje:
@? PAR@
@PAR ?@D17|DataOd|&DataOd:REG={DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DataDo|&DataDo:REG={DateClwLastDay('m')} @? PAR@
exists (select 1 from cdn.Uprawnienia join cdn.DaneKadMod on Upr_DkmId
= Dkm_DkmID where Pri_PraID
= Upr_PraID and DKM_DkmID = ??Kwalifikacje and upr_KursTermin between
??DataOd and ??DataDo)

Przed odfiltrowaniem pojawi się rozwijana lista kwalifikacji oraz
pytanie o zakres dat.

Jak zablokować operatorowi dostęp do dokumentów dotyczących rozliczeń
z pracownikami z tytułu wynagrodzeń?

Aby operator nie widział:
A. Zapisów kasowo/bankowych wystawionych na pracowników, należy
założyć filtr w menu: Kasa/bank/Zapisy kasowe/bankowe. Kliknąć na
ikonę „Konstruktor filtra” i na zakładce [Zaawansowane], wpisać w polu
Filtr SQL:

BZp_PodmiotTyp<>3

Na zakładce [Opcje], wybrać: Obowiązkowy i wybrać operatora, który ma
mieć załączony ten filtr.
Jeżeli jest więcej niż jeden operator, który ma mieć założony taki
filtr, należy zbudować drugi identyczny filtr, z tym, że na zakładce
Opcje wybrać innego operatora.

B. Dla zdarzeń w Preliminarzu pochodzących z list płac, należy założyć
filtr w menu: Kasa/Bank / Preliminarz płatności.
Kliknąć na ikonę „Konstruktor filtra” i na zakładce [Zaawansowane],
wpisać w polu Filtr SQL:

BZd_DokumentTyp<>8

Na zakładce [Opcje], wybrać: Obowiązkowy i wybrać operatora, który ma
mieć załączony ten filtr.
Jeżeli jest więcej niż jeden operator, który ma mieć założony taki
filtr, należy zbudować drugi identyczny filtr, z tym, że na zakładce
Opcje wybrać innego operatora.

C. Aby operator nie mógł wybrać z listy pracownika (np. po to aby
podglądnąć listę rozliczonych i nierozliczonych zapisów dla wybranego
pracownika w menu Kasa/bank/ Rozliczenia podmiotu. Należy operatorowi
dodać blokadę dostępu do listy pracowników. Blokadę zakłada się w
menu: System / Konfiguracja / Program/Użytkowe/Operatorzy. Na formatce
danego operatora, na zakładce [Blokady dostępu] należy dodać blokadę:
Lista pracowników, wspólników i właścicieli.

D. Aby operator nie widział rozliczeń powstałych z dokumentów, z
których przynajmniej jeden jest wystawiony na pracownika, należy
założyć następujący filtr obowiązkowy dla operatora w menu Kasa/Bank/
Rozliczenia: pole Filtr SQL:

not exists (select * from CDN.BnkRozKwotyView where
BRKV_BRKId=BRK_BRKId and (BRKV_PodmiotTyp1=3 OR BRKV_PodmiotTyp2=3))

Filtry obowiązkowe włącza się w menu:
System/Konfiguracja/Program/Użytkowe/Parametry: Stosuj filtry
obowiązkowe. Operator nadający filtry obowiązkowe musi być
Administratorem, pozostali operatorzy nie powinni być
administratorami.

Uwaga
Na formatce Operatora (menu:
System/Konfiguracja/Program/Użytkowe/Operatorzy) znajduje się parametr
Blokada dostępu do rozliczeń pracowników. Parametr ten blokuje dostęp
do dokumentów w module Kasa/Bank, na których jako podmiot jest wybrany
pracownik lub wspólnik.

Jak wyfiltrować listę pracowników, którym kończy się ważność badań okresowych?

Na liście pracowników w menu Kadry/Płace/Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@D17|DataOd|Podaj datę:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DataDo|Podaj datę:{DateClwLastDay('m')} @? PAR@
exists (select 1 from CDN.PracEtaty where PRI_PraId=PRE_PraId and
PRE_WaznoscBadanOkres between ??DataOd AND ??DataDo)
Przed odfiltrowaniem pojawi się pytanie o zakres dat.

Jak wyfiltrować listę pracowników zatrudnionych na stanowiskach robotniczych?

Na liście pracowników w menu Kadry/Płace/Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@D17|Data|&Data:{Today()}@? PAR@
exists (select 1 from CDN.PracEtaty join CDN.DaneKadMod on
PRE_ETADkmIdStanowisko=DKM_DkmId
where DKM_Robotnicze=1 and DKM_Rodzaj=1 and PRE_PraId=PRI_PraId and
??Data between PRE_DataOd and PRE_DataDo)

Przed odfiltrowaniem pojawi się zapytanie o datę.

Jak wyfiltrować listę pracowników zgłoszonych do wszystkich
ubezpieczeń (społeczne i zdrowotne)?

Na liście pracowników w menu Kadry/Płace/Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select * from cdn.pracetaty where pri_praid=pre_praid and
pre_ubzzdrowod <> CONVERT(DATETIME,'1899-12-30',120) and
PRE_UBZJestEmerytal=1 and PRE_UBZJestRentowe=1 and
PRE_UBZJestchorobowe=1 and PRE_UBZJestwypad=1)

Jak wyfiltrować listę pracowników zgłoszonych tylko do ubezpieczenia
zdrowotnego?

Na liście pracowników w menu Kadry/Płace/Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select * from cdn.pracetaty where pri_praid=pre_praid and
pre_ubzzdrowod <> CONVERT(DATETIME,'1899-12-30',120) and
PRE_UBZJestEmerytal=0 and PRE_UBZJestRentowe=0 and
PRE_UBZJestchorobowe=0 and PRE_UBZJestwypad=0)

Jak wyfiltrować listę pracowników przypisanych do wybranej kategorii?

Na liście pracowników w menu Kadry/Płace/Kadry, w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

@PAR ?@R(select ID=KAT_KatId, Kat_KodSzczegol from
CDN.Kategorie)|Kategoria|&Kategoria:REG=PLACE @? PAR@
exists (select 1 from CDN.PracEtaty where PRI_PraId=PRE_PraId and PRE_KATId=
??Kategoria and ?@D17|Data:{Today()} between PRE_DataOd and PRE_DataDo)

Przed odfiltrowaniem pojawi się rozwijana lista słownikowa z
kategoriami oraz pytanie o datę.

Jak wyfiltrować listę dokumentów nierozliczonych wystawionych na pracownika?

Na liście Dokumentów Nierozliczonych w menu Kasa/Bank w Konstruktorze
filtra, na zakładce [Zaawansowane], w polu Filtr SQL należy wpisać:

exists (select * from CDN.PodmiotyView where DKB_PodmiotId=Pod_PodId
and Dkb_PodmiotTyp = Pod_PodmiotTyp AND DKb_PodmiotTyp=3)

Jak wyfiltrować pracowników z listy Kadry zwolnionych w zadanym
okresie, w aktualnym okresie historycznym?

W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@D17|DataOd|Zwoln. w okresie od:{DateClwFirstDay('m')} @? PAR@
@PAR ?@D17|DataDo|do:{DateClwLastDay('m')} @? PAR@
exists (select 1 from CDN.PracEtaty where PRI_PraId=PRE_PraId and
PRE_ZatrudnionyDo between ??DataOd AND ??DataDo and ?@D17|Na datę
aktualności:{Today()} between PRE_DataOd and PRE_DataDo)

Jak wyfiltrować pracowników, którzy mają formę płatności „ROR” lub
„gotówka”, w aktualnym okresie historycznym?

Filtr działa tak, że sprawdza odpowiedni zapis historyczny pracownika
(data ,którą ustawimy jako „Zapis hist. prac” – podpowiada się
aktualna) oraz płatność, która ma ustawioną „nadwyżkę”.
W Konstruktorze filtra, na zakładce [Zaawansowane], w polu Filtr SQL
należy wpisać:

@PAR ?@R(SELECT Id = 1, Kod = 'gotówka' UNION
SELECT Id = 3, Kod = 'ROR')|platnosc|&platność:REG= @? PAR@
exists(select 1 from CDN.PracEtaty join CDN.SchematPlatnosci on
SPL_PodmiotId = PRE_PreId
where PRE_PraId=PRI_PraId and SPL_Reszta = 1 and SPL_FplId =
??Platnosc AND ?@D17|Zapis hist. prac:{Today()} between PRE_DataOd and
PRE_DataDo)

W jaki sposób wyszukać pracowników z określoną kategorią na wybranej
liście płac?

Z poziomu Płace i Kadry/ Wypłaty pracowników w Konstruktorze filtra,
na zakładce [Zaawansowane] należy wpisać:

@PAR ?@R(SELECT LPL_LplId, LPL_NumerPelny FROM
CDN.ListyPlac)|Lista|&Lista plac:REG= @? PAR@
@PAR ?@LS0(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:0|@? PAR@
EXISTS(SELECT 1 FROM CDN.PracEtaty
JOIN CDN.Wyplaty ON WPL_PraId = PRE_PraId
JOIN CDN.ListyPlac ON LPL_LplId = WPL_LplId
WHERE PRI_PraId = PRE_PraId
AND WPL_KatId = ??Kategoria
AND LPL_LplId = ??Lista)

Można również zastosować wariant filtra, w którym numer listy płac
jest automatycznie przekazywany na podstawie wybranej na oknie listy:

@PAR ?@HN0|ListaPlacId|&ListaPlacId:0@? PAR@
@PAR ?@LS0(OP_LIST.DLL|CALLLOOKUPKATLISTA())|kategoria|&kategoria:0|@? PAR@
EXISTS(SELECT 1 FROM CDN.PracEtaty
JOIN CDN.Wyplaty ON WPL_PraId = PRE_PraId
JOIN CDN.ListyPlac ON LPL_LplId = WPL_LplId
WHERE PRI_PraId = PRE_PraId
AND WPL_KatId = ??Kategoria
AND LPL_LplId = ??ListaPlacId)


________________________________

OPT039 Internetowa Wymiana Dokumentów

Data aktualizacji: 17-07-2019


Spis treści

Co to jest Internetowa Wymiana Dokumentów?

W jaki sposób zabezpieczone są przesyłane dane?

Zamawianie kont Internetowej Wymiany Dokumentów

Konfiguracja Internetowej Wymiany Dokumentów

Aktywacja konta
Konfiguracja oddziałów
Konfiguracja baz u partnerów wymiany

Wysyłanie i odbieranie danych

Eksport i import danych
Skrzynka Internetowej Wymiany Dokumentów

Przykłady konfiguracji

Biuro rachunkowe i dwóch klientów (jeden z nich ma dwa punkty sprzedażowe)
Centrala i dwa punkty sprzedażowe

FAQ

Nie można dokonać autoryzacji na serwerze Comarch
Logowanie użytkownika [ID Klienta] nie powiodło się. W celu aktywacji
usługi prosimy o zapoznanie się ze stroną […]
Konto o ID [ID Klienta] nie istnieje
Brak ustalonego działu. Proszę uzupełnić dane w
Konfiguracja->Firma->Ogólne->Praca rozproszona
Wystąpił błąd. W Konfiguracji nie została ustawiona ścieżka do
katalogu przechowywania plików XML. Proszę uzupełnić dane w
Konfiguracja -> Stanowisko -> Praca rozproszona
Błąd przy imporcie paczki. Wiadomość została zaszyfrowana innym
kluczem niż aktualnie posiadany. Usuń oczekujące paczki i wyślij je
ponownie


Co to jest Internetowa Wymiana Dokumentów?

Internetowa Wymiana Dokumentów to model współpracy pomiędzy punktem
sprzedaży a działem księgowym. Wymiana może odbywać się w modelu:

a) Klient biura rachunkowego <-> Biuro rachunkowe
b) Punkty sprzedażowe firmy <-> Centrala firmy

Współpraca polega na tym, że punkt sprzedażowy ze swojej bazy danych
wysyła zaszyfrowane i podpisane dokumenty. Wymiana odbywa się
elektronicznie poprzez Internet. Dokumenty w postaci zaszyfrowanej
paczki trafiają na serwery Comarch skąd dział księgowy również przez
Internet odbiera je i wczytuje do bazy. Dział księgowy może również
przesyłać dane do bazy działu sprzedażowego.
Mechanizm wykorzystuje model Pracy rozproszonej, czyli konfiguracja,
struktura plików wymiany danych oraz miejsce w programie, z którego
eksportowane i importowane są dane, są zgodne z modelem Pracy
rozproszonej.
Więcej informacji na temat Pracy rozproszonej można znaleźć w
podręczniku Ogólne i Konfiguracja do programu Comarch ERP Optima.

W jaki sposób zabezpieczone są przesyłane dane?

Główne cechy zastosowanego rozwiązania:

bezpieczeństwo danych – system został tak zaprojektowany, aby zapewnić
jak najlepsze bezpieczeństwo przesyłanych danych,
poufność danych – uzyskiwana jest dzięki podwójnemu systemowi
szyfrowania (paczki danych są szyfrowane/deszyfrowane asymetrycznie
parą kluczy RSA oraz przesyłane szyfrowanym kluczem symetrycznym
protokołem opartym o TLS 1.0 / SSL 3.0),
integralność danych – jest zapewniona dzięki zastosowaniu podpisu
elektronicznego (paczki są podpisywane kluczem prywatnym strony
wysyłającej) i strona odbierająca ma pewność, że dane nie zostały
zmodyfikowane,
zabezpieczenia serwera – (takie jak wymuszanie haseł, czy szyfrowanie
całej transmisji uniemożliwiające przechwycenie hasła) uniemożliwiają
nieautoryzowane usuwanie danych z serwera, oraz wysyłanie na serwer.


Zamawianie kont Internetowej Wymiany Dokumentów

Biuro Rachunkowe, które chce wymieniać dokumenty ze swoimi Klientami
powinno zarejestrować się w Społeczności Biur Rachunkowych
iKsiegowość24 na stronie: www.iksiegowosc24.pl. Podmioty
zarejestrowane w Społeczności Biur Rachunkowych mają automatycznie
zakładane konta Internetowej Wymiany Dokumentów (IWD). Informacja
potwierdzająca założenie konta IWD przesyłana jest wiadomością e-mail.

Uwaga

Biura Rachunkowe nie składają dla siebie zamówienia na usługę IWD.

Po przystąpieniu do społeczności Biuro Rachunkowe, może wymieniać
dokumenty ze swoimi klientami pracującymi na oprogramowaniu Comarch
ERP Optima oraz Comarch ERP XT. Aby wymiana była możliwa należy
klientom zamówić usługę IWD. W tym celu Biuro Rachunkowe wypełnia
formularz zgłoszeniowy, który znajduje się po zalogowaniu na
www.iksiegowosc24.pl w zakładce Wymiana Dokumentów – IWD. Poprawna
wysyłka formularza kończy się odpowiednim komunikatem. Zamówienie
widoczne jest na liście złożonych zamówień w iKsięgowość24, a na adres
mailowy osoby kontaktowej Biura Rachunkowego wysyłana jest wiadomość
informująca o złożonym zamówieniu.

Wskazówka

Wymiana z Klientami pracującymi na programie Comarch ERP Optima jest
bezpłatna. W przypadku klientów pracujących na programach Comarch ERP
XT możliwości wymiany uzależnione są od wybranego pakietu. Więcej
informacji można znaleźć w Cenniku.

W modelu wymiany pomiędzy centralą a oddziałami firmy pracujących w
programie Comarch ERP Optima należy:

zapoznać się z regulaminem usługi Internetowa Wymiana Dokumentów
wypełnić formularz w wersji elektronicznej
przesłać wypełniony formularz na adres wymianadanych@comarch.pl.

Konfiguracja Internetowej Wymiany Dokumentów

Wskazówka

Internetowa Wymiana Dokumentów wymaga wykorzystywania tej samej wersji
Comarch ERP Optima u wszystkich partnerów wymiany.

Aktywacja konta

Przed rozpoczęciem wymiany należy aktywować usługę IWD na serwerze Comarch.
W menu System/ Konfiguracja/ Firma/ Ogólne/ Praca rozproszona, należy
zaznaczyć rolę, jaką będzie pełnić klient / partner (sprzedaż/płace
lub księgowość), wpisać identyfikator księgowości (istotne
rozróżnienie na duże/małe litery) i – jeśli jest możliwość –
identyfikator działu sprzedaży. W przypadku działów sprzedaży należy
także uzupełnić rejestry dla poszczególnych typów dokumentów.
W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury – konto należy zaznaczyć parametr Aktywuj
wymianę danych przez serwer Comarch, a następnie podać:

Numer klienta – numer ewidencyjny Comarch (widoczny na certyfikacie
rejestracji oprogramowania),
PIN – numer PIN przydzielony Klientowi Comarch do korzystania z
Comarch Asysty (widoczny na certyfikacie rejestracji oprogramowania) –
wymagany przy zakładaniu konta,
Hasło – w to pole należy wpisać hasło, które będzie wymagane przy
jakiejkolwiek zmianie ustawień konta na serwerze Comarch. Następnie
należy nacisnąć przycisk Aktywuj wymianę. Program poprosi o
powtórzenie hasła i po sprawdzeniu poprawności danych założy konto na
serwerze. Pola z danymi zostaną wyszarzone.

Wskazówka

W sytuacji gdy hasło zostanie utracone, jego reset możliwy jest pod
pod adresem: wymianadanych@comarch.pl

Po aktywacji wymiany aktywne będą przyciski:

Zmień hasło– opcja umożliwia zmianę hasła dostępu do konta na serwerze,
Zarządzanie oddziałami– opcja umożliwia zarządzanie oddziałami,
szerszy opis w kolejnym punkcie.

Po założeniu konta należy skonfigurować oddziały.

Konfiguracja oddziałów

W każdym typie wymiany należy skonfigurować oddział/oddziały partnerów
wymiany. Oddziały są ściśle związane z danym numerem klienta. Opcja
Zarządzanie oddziałami dostępna jest po podaniu hasła. Dodając nowy
oddział należy podać jego symbol (nie może on zawierać polskich znaków
ani znaków specjalnych: spacja,_,!,’,”, itp.) oraz dane adresowe.
Wszystkie pola są wymagane. Po dodaniu oddziału należy wybrać oddział
związany z daną instalacją.

Oddziału nie można usunąć. Jeśli zaistnieje potrzeba wstrzymania
wymiany z danym oddziałem można ustawić parametr Oddział nieaktywny. W
razie potrzeby każdy oddział nieaktywny możemy ponownie aktywować.

Zmiana oddziału (także wybranie ponowne tego samego oddziału)
spowoduje wygenerowanie nowego certyfikatu, co uniemożliwi odbiór
wiadomości oczekujących na serwerze oraz wysłanie wiadomości z
oddziału aktualnie wybieranego, jeśli jest on wykorzystywany w innej
bazie.

Konfiguracja baz u partnerów wymiany

Po wskazaniu oddziału, dla danej instalacji, aktywna staje się tabela
z konfiguracją wszystkich baz firmowych dostępnych w podłączonej bazie
konfiguracyjnej.
Tabela zawiera następujące kolumny:
1. Nazwa bazy danych
2. Typ wymiany – jaką rolę będzie pełnić dana baza. Dostępne są
następujące typy wymiany:

BRAK – wyłączona wymiana przez serwer Comarch dla tej bazy. Baza może
współpracować w trybie Pracy rozproszonej (wymiana bez pośrednictwa
serwera Comarch, poprzez plik XML). Ustawienia do Pracy rozproszonej
dostępne w System/ Konfiguracja/ Firma/ Ogólne/ Praca rozproszona.
SPR-BR – ten typ wymiany wybieramy w dziale sprzedaży. Jest to baza w
dziale sprzedaży wymieniająca dokumenty z biurem rachunkowym.
SPR-CEN – ten typ wymiany wybieramy w dziale sprzedaży wymieniającym
dokumenty z centralą tej samej firmy.
BR-SPR – ten typ wymiany wskazujemy w biurze rachunkowym przy bazie
klienta. Jest to wymiana dokumentów pomiędzy bazą sprzedaży a biurem
rachunkowym.
CEN-SPR – ten typ wymiany wybieramy w centrali, której baza komunikuje
się z oddziałem sprzedaży tej samej firmy.

3. Identyfikator Partnera – numer klienta Comarch, który jest
partnerem wymiany dla danej bazy. W przypadku wymiany i identyfikator
partnera należy ustawić taki sam jak numer klienta.
4. Oddział Partnera – symbol oddziału partnera wymiany, z którym ma
następować komunikacja. W przypadku typu wymiany i nie należy
uzupełniać Oddziału Partnera.

Wysyłanie i odbieranie danych

Eksport i import danych

Wysyłanie i odbieranie danych odbywa się identycznie jak w przypadku
modelu pracy rozproszonej, czyli poprzez opcję Narzędzia/ Praca
rozproszona/ Eksport/Import. Eksport / Import dostępny jest poprzez
Narzędzia/ Praca Rozproszona.

W sytuacjach awaryjnych (np. brak połączenia z Internetem) jest
możliwość eksportu / importu poprzez plik XML, bez konieczności
wyłączania wymiany przez serwer Comarch. W tym celu należy wybrać
importuj z pliku/ eksportuj do pliku i wskazać właściwą ścieżkę.

Przed importem wymagane jest uzupełnienie ścieżki zapisu pobranych
paczek (System/ Konfiguracja/ Stanowiska/ Praca rozproszona). W
przeciwnym wypadku zostanie wyświetlony komunikat o konieczności
uzupełnienia katalogu zapisu plików XML. W przypadku korzystania z
Comarch ERP Optima w chmurze katalog zapisu plików XML jest ustawiony
na katalog Moje dokumenty.

Rys. 1 Eksport danych – dział sprzedaży

W przypadku typów wymiany CEN-SPR oraz BR-SPR eksport danych może
następować do wszystkich oddziałów lub do jednego wybranego (opcja
Wybierz oddział).

Po imporcie paczka jest usuwana z serwera i nie jest dostępna dla
danego oddziału do ponownego importu przez ten sam oddział. Jeśli
import nie przebiegł całkowicie poprawnie, to jest możliwość ponownego
importu z pliku, który zapisał się w katalogu określonym w System/
Konfiguracja/ Stanowisko/ Praca rozproszona/ Parametry.

Biuro rachunkowe może odbierać pliki wysłane przez Klientów seryjnie
poprzez moduł Comarch ERP Optima Biuro Rachunkowe.

Rys. 2 Seryjny import dokumentów w Biurze Rachunkowym

Pliki zostaną zaimportowane z serwera, a następnie zaimportowane do
baz Klientów (na podstawie zgodnego ID partnera z Numerem klienta). W
Panelu wyników pojawi się informacja o statusie importu oraz link do
pliku ze szczegółowym przebiegiem importu do danej bazy.

Automatyczny import i eksport danych IWD

W programie Comarch ERP Optima jest możliwość ustawienia
automatycznego eksportu i importu danych za pomocą Internetowej
Wymiany Dokumentów poprzez Serwis Operacji Automatycznych.

W Konfiguracji Programu/ Ogólne/ Praca rozproszona/E-faktury można
określić, automatyczną synchronizację dla wybranej bazy, poprzez
zaznaczenie przy niej parametru Automatyczna synchronizacja. Po
zaznaczeniu otwiera się okno z konfiguracją automatycznego importu i
eksportu paczek IWD dla wybranej bazy. W nagłówku okna znajduje się
informacja o nazwie bazy danych, wybranym typie wymiany oraz
identyfikatorze partnera (numerze ID Klienta Comarch). Okno składa się
z dwóch zakładek.

Rys.3 Konfiguracja automatycznego importu/eksportu paczek IWD - Harmonogram

Zakładka [Harmonogram] zawiera następujące informacje:

parametr Automatyczna synchronizacja Internetowej Wymiany Dokumentów –
parametr domyślnie zaznaczony; jego odznaczenie powoduje wyłączenie
automatycznej synchronizacji IWD dla tej bazy,
pole umożliwiające wskazanie operatora, w imieniu którego będą
automatycznie synchronizowane dane IWD; ten operator będzie ustawiany
na importowanych dokumentach,
parametry dotyczące eksportu danych:
dzień w którym będzie wykonywany eksport – dostępne są opcje:
codziennie, 5-tego dnia miesiąca, 10-tego dnia miesiąca, 20-tego dnia
miesiąca,
-częstotliwość eksportu – możliwość wyboru jednego z następujących
ustawień: 1 h, 2 h, 3 h, 4 h, 5 h, 6 h, 12 h,
-zakres godzin w jakich będzie się odbywał eksport,
-zakres czasowy eksportowanych dokumentów. Do wyboru będą opcje:
wszystkie, poprzedni miesiąc, bieżący miesiąc.

W przypadku wybrania opcji wszystkie eksportowane będą wszystkie
dokumenty, które nie zostały jeszcze wyeksportowane (nie mają
znacznika E).

Po wybraniu opcji poprzedni miesiąc eksportowane będą dokumenty z datą
wystawienia z poprzedniego miesiąca w stosunku do daty bieżącej
ustawionej w programie, które nie zostały jeszcze wyeksportowane.

Po wybraniu opcji bieżący miesiąc eksportowane będą dokumenty z datą
wystawienia z miesiąca na podstawie daty bieżącej ustawionej w
programie, które nie zostały jeszcze wyeksportowane.

Data dokumentów określana jest następująco:

w przypadku dokumentów handlowych, magazynowych, rejestru VAT oraz
ewidencji dodatkowej znaczenie ma data wystawienia dokumentu,
w przypadku list płac jest to okres wypłaty określany na formularzu listy płac,
w przypadku raportów k/b jest to data zamknięcia raportu,
w przypadku płatności i dokumentów kompensaty jest to data dokumentu,
w przypadku rozliczeń jest to data rozliczenia,
w przypadku danych słownikowych eksportowane są wszystkie dane, które
nie zostały jeszcze wyeksportowane.


Parametry dotyczące importu danych:

zakres godzin w jakich będzie się odbywał import,
częstotliwość importu – możliwość wyboru jednego z następujących
ustawień: 1 h, 2 h, 3 h, 4 h, 5 h, 6 h, 12 h.

Ikona wywołuje listę logów z operacji eksportu i importu paczek IWD
wykonywanych przez Comarch ERP Serwis Operacji Automatycznych dla tej
bazy danych.
Na dole okna znajduje się sekcja z informacją o stanie uruchomienia
usługi Serwis Operacji Automatycznych wraz z przyciskiem odsyłającym
do okna konfiguracji usługi SOA (Konfiguracja Stanowiska/ Serwis
Operacji Automatycznych/ Parametry) w razie gdyby usługa SOA nie była
uruchomiona. W przypadku Comarch ERP Optima w modelu usługowym sekcja
ta nie jest dostępna.
Zakładka [Eksportowane dokumenty] zawiera listę danych słownikowych
oraz typów dokumentów, które z wybranej bazy mają być automatycznie
przesyłane za pomocą IWD. Analogicznie do dotychczasowej
funkcjonalności pracy rozproszonej lista zawiera różne pozycje w
zależności od wybranego dla bazy danych typu wymiany.

Rys.4 Konfiguracja automatycznego importu/eksportu paczek IWD -
Eksportowane dokumenty

Okno konfiguracji automatycznego importu i eksportu paczek IWD dla
wybranej bazy może również zostać wywołanie poprzez kliknięcie ikony
W sytuacji kiedy Użytkownik skonfiguruje do synchronizacji jedną bazę,
przy zapisywaniu pojawia się pytanie: Czy chcesz ustawić takie same
parametry automatycznej synchronizacji dla pozostałych baz o tym samym
typie wymiany? Odpowiedź Tak powoduje zapisanie takich samych ustawień
dla pozostałych baz o tym samym typie wymiany.

Dodatkowo aby ułatwić konfigurowanie SOA dla kolejnych baz, po
zaznaczeniu dla bazy parametru Automatyczna synchronizacja otwiera się
okno z ustawieniami z poprzednio konfigurowanej bazy danych.

W przypadku importu raportów kasowych/bankowych może mieć miejsce
sytuacja, że zostanie zaimportowany raport k/b, a przy kolejnym
imporcie w paczce będzie ten sam raport jednak z większą ilością
zapisów k/b. W związku z tym aby zaimportować zapisy kasowe/bankowe do
już istniejącego raportu k/b operator wskazany na oknie SOA powinien
mieć na swojej karcie w Konfiguracji Programu/ Użytkowe/ Operatorzy
zaznaczony parametr Prawo importu zapisów k/b do otwartych raportów. W
momencie konfigurowania SOA przy wyborze operatora następuje
sprawdzenie czy ma on zaznaczony wspomniany parametr. Jeżeli parametr
nie jest zaznaczony, wówczas Użytkownik otrzyma informację: Dla
Operatora [KOD] został zaznaczony parametr „Prawo importu zapisów k/b
do otwartych raportów” w konfiguracji programu-> Użytkowe->
Operatorzy.

Uwaga

W przypadku Comarch ERP Optima w modelu usługowym niezaimportowane
dane z paczek IWD które były importowane automatycznie są zapisywane w
folderze na serwerze Comarch, do którego dostęp mają wszyscy
Użytkownicy danej firmy. Dane starsze niż 30 dni są automatycznie
usuwane z serwera Comarch.

Skrzynka Internetowej Wymiany Dokumentów

Skrzynka IWD widoczna jest z menu Narzędzia/ Skrzynka IWD. W Skrzynce
IWD Użytkownik ma możliwość podglądnięcia wysłanych paczek oraz
odebranych i oczekujących na odbiór.

Na tej liście dostępne są dwie zakładki:
1. Wysłane – na tej liście widoczne są paczki wysłane, które można
odfiltrować zakresem dat. Zaznaczając dodatkowo parametr Pokaż dane
skasowane i odebrane można zobaczyć również o takim statusie.
2. Do odebrania – na tej liście widoczne są paczki do odebrania, które
można odfiltrować zakresem dat. Zaznaczając dodatkowo parametr Pokaż
dane odebrane dla oddziału można zobaczyć również paczki o takim
statusie.

Na obu zakładkach znajdują się kolumny:

Lp – liczba porządkowa paczki,
Typ danych – rodzaj danych,
Operator wysyłający – imię i nazwisko operatora, który przeprowadził eksport,
Odbiorca/Nadawca – symbol oddziału, z którego pochodzą dane,
Data wysłania – data wysłania paczki na serwer,
Rozmiar danych – wielkość paczki w kilobajtach,
Odebrano – status paczki,
ID paczki – identyfikator paczki.

Rys. 5 Skrzynka Internetowej Wymiany Dokumentów

Na liście Wysłane możliwe są następujące statusy:

tak – paczka odebrana,
nie – paczka nieodebrana,
częściowo – niektóre oddziały odebrały paczkę, pozostałe nie odebrały
lub paczka została przez niektóre oddziały skasowana,
skasowano – paczka została skasowana przez wysyłającego lub przez
wszystkich adresatów – nikt nie będzie mógł jej odebrać.


Na liście Do odebrania możliwe są następujące statusy:

tak – paczka odebrana,
nie – paczka nieodebrana,
błąd – zaczęto pobieranie, ale go nie zakończono,
skasowano – tylko ten oddział nie będzie mógł paczki odebrać.

Na obu zakładkach jest możliwe odświeżenie skrzynki, skasowanie paczki
i podglądnięcie jej szczegółów, w których można dowiedzieć się, jakie
operacje zostały wykonane na danej paczce.

Odśwież – odświeżenie listy paczek. Uaktualnienie odbywa się poprzez
połączenie z serwerami Comarch i sprawdzenie wysłanych/czekających na
odbiór paczek wraz ze statusami.

Odbierz fakturę – odbiór e-faktury. Odbiór odbywa się po wskazaniu
paczki do odebrania i naciśnięciu przycisku. Po zaakceptowaniu
informacji o certyfikacie kolumna Odebrano otrzyma status „Tak”,
natomiast sam dokument pojawi się na liście faktur zakupu. Przycisk
uaktywnia się w momencie zaznaczenia na liście e-faktury (kolumna Typ
danych posiada status „E-faktura”).

Podgląd faktury – podgląd e-faktury. Podgląd będzie wykonywał się w
przeglądarce internetowej. Przycisk uaktywnia się w momencie
zaznaczenia na liście e-faktury (kolumna Typ danych posiada status
E-faktura).

Usuń – skasowanie paczki.

Podgląd – podgląd szczegółów paczki. W szczegółach paczki można
dowiedzieć się, jakie operacje zostały wykonane na danej paczce.

Przykłady konfiguracji

Biuro rachunkowe i dwóch klientów (jeden z nich ma dwa punkty sprzedażowe)

Biuro rachunkowe

Biuro Rachunkowe dodaje dwie bazy dla dwóch klientów, KlientA (nr
klienta Comarch: 2, PIN: 2222), KlientB (nr klienta Comarch: 3, PIN:
3333).

Nazwy baz: BazaklientaA i BazaklientaB

Biuro Rachunkowe (numer klienta Comarch: 1, PIN 1111) zamawia
aktywację IWD w Comarch. Następnie ustawia konfigurację:

1. W menu System/ Konfiguracja/ Firma/ Ogólne/ Praca rozproszona
wpisuje identyfikator księgowości „KSIEG”,

2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 1,
PIN: 1111,
Hasło: ustala samodzielnie hasło spełniające wymagania bezpieczeństwa.

3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.

4. Następnie przez Zarządzanie oddziałami dodaje Odział o symbolu
„BIUROR” i go wybiera.

5. W tabelce dla baz klientów ustawia parametry wymiany. Aby można
było zapisać wprowadzone parametry, konta IWD powinny być aktywne,
czyli KlientA i KlientB powinni przejść swoją konfigurację (punkty
1-4).

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
BazaklientaABR-SPR2
BazaklientaBBR-SPR3

KlientA

KlientA posiada jeden punkt sprzedażowy.

1. W swojej bazie (nazwa bazy „klientA”) w menu System/ Konfiguracja/
Firma/ Ogólne/ Praca rozproszona wpisuje identyfikator księgowości
„KSIEG” i identyfikator działu sprzedaży „SPRZE”. Uzupełnia rejestry
dla poszczególnych typów dokumentów.

2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 2,
PIN: 2222,
Hasło: ustala samodzielnie hasło spełniające wymagania bezpieczeństwa.

3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.

4. Następnie przez Zarządzanie oddziałami dodaje Oddział o symbolu
„SKLEP” i go wybiera.

5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
klientASPR-BR1BIUROR

KlientB

KlientB posiada dwa punkty sprzedażowe: WIELICKA, ZAPOLSKIEJ.

Lokalizacja WIELICKA

1. W swojej bazie (nazwa bazy „klientBWielicka”) w menu System/
Konfiguracja/ Firma/ Ogólne/ Praca rozproszona wpisuje identyfikator
księgowości „KSIEG” i identyfikator działu sprzedaży „SPRZ1”.
Uzupełnia rejestry dla poszczególnych typów dokumentów.
2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 3,
PIN: 3333,
Hasło: ustala samodzielnie hasło spełniające wymagania bezpieczeństwa
(hasło jest wspólne dla wszystkich lokalizacji klienta).


3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.
4. Następnie przez Zarządzanie oddziałami dodaje Oddział o symbolu
„WIELICKA” i go wybiera.
5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
klientBWielickaSPR-BR1BIUROR

Lokalizacja ZAPOLSKIEJ

1. W swojej bazie (nazwa bazy „klientBZapolskiej”) w menu System/
Konfiguracja/ Firma/ Ogólne/ Praca rozproszona wpisuje identyfikator
księgowości „KSIEG” i identyfikator działu sprzedaży „SPRZ2”.
Uzupełnia rejestry dla poszczególnych typów dokumentów.
2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 3,
PIN: 3333,
Hasło: hasło takie samo jak dla lokalizacji WIELICKA.


3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.
4. Następnie przez Zarządzanie oddziałami dodaje Oddział o symbolu
„ZAPOLSKIEJ” i go wybiera.
5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
klientBZapolskiejSPR-BR1BIUROR

Centrala i dwa punkty sprzedażowe

Centrala

Centrala dodaje swoją bazę danych (nazwa bazy „Centrala”). Firma
(numer klienta 4, PIN 4444) zamawia aktywację IWD w Comarch. Następnie
ustawi konfigurację:

1. W menu System/ Konfiguracja/ Firma/ Ogólne/ Praca rozproszona
wpisuje identyfikator księgowości „KSIEG”.

2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 4,
PIN: 4444,
Hasło: ustala samodzielnie hasło spełniające wymagania bezpieczeństwa.

3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.

4. Następnie przez Zarządzanie oddziałami dodaje Oddział o symbolu
„CENTRALA” i go wybiera.

5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
CentralaCEN-SPR4

Punkt sprzedażowy WIELOPOLE

1. Punkt sprzedażowy WIELOPOLE w swojej bazie (nazwa bazy
„bazaWielopole”) w menu System/ Konfiguracja/ Firma/ Ogólne/ Praca
rozproszona wpisuje identyfikator księgowości „KSIEG” i identyfikator
działu sprzedaży „SPRZ1”. Uzupełnia rejestry dla poszczególnych typów
dokumentów.

2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 4,
PIN: 4444,
Hasło:hasło takie samo jak dla lokalizacji Centrala.

3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.

4. Następnie przez Zarządzanie oddziałami dodaje Odział o symbolu
„WIELOPOLE” i go wybiera.

5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
bazaWielopoleSPR-CEN4CENTRALA

Punkt sprzedażowy RYNEK

1. Punkt sprzedażowy RYNEK w swojej bazie (nazwa bazy „bazaRynek”) w
menu System/ Konfiguracja/ Firma/ Ogólne/ Praca rozproszona wpisuje
identyfikator księgowości „KSIEG” i identyfikator działu sprzedaży
„SPRZ2”. Uzupełnia rejestry dla poszczególnych typów dokumentów.

2. W menu System/ Konfiguracja/ Program/ Ogólne/ Praca
rozproszona/E-faktury - konto zaznacza parametr Aktywuj wymianę danych
przez serwer Comarch, a następnie podaje:

Numer klienta: 4,
PIN: 4444,
Hasło:hasło takie samo jak dla lokalizacji Centrala.

3. Po wybraniu Aktywuj wymianę powtarza wprowadzone hasło. Konto
zostaje aktywowane.

4. Następnie przez Zarządzanie oddziałami dodaje Oddział o symbolu
„RYNEK” i go wybiera.

5. W tabelce dla bazy ustawia następujące parametry:

Nazwa bazyTyp wymianyIdentyfikator partneraOddział partnera
bazaRynekSPR-CEN4CENTRALA

FAQ

W tej części opisane zostały możliwe komunikaty, wyświetlające się
klientom pracującym na Comarch ERP Optima podczas pracy z Internetową
Wymianą Dokumentów.

Nie można dokonać autoryzacji na serwerze Comarch.

Komunikat pojawia się w sytuacji, gdy podane dane w System/
Konfiguracja/ Program/ Ogólne/ Praca rozproszona są nieprawidłowe lub
brak połączenia z serwerem.
Klient powinien sprawdzić wprowadzone dane: Numer klienta, PIN oraz
połączenie z Internetem.

Logowanie użytkownika [ID Klienta] nie powiodło się. W celu aktywacji
usługi prosimy o zapoznanie się ze stroną […].

Komunikat pojawia się w sytuacji, gdy dokonujemy zmian w wymianie z
klientami w System/ Konfiguracja/ Program/ Ogólne/ Praca rozproszona i
potwierdzając dokonanie zmian wpisujemy błędne hasło.

Klient powinien zweryfikować wprowadzane hasło. W przypadku braku
zapamiętania poprawnego hasła powinien wysłać wiadomość na adres
wymianadanych@comarch.pl z opisem problemu i swoim numerem ID klienta
oraz PIN w celu zresetowania hasła.

Konto o ID [ID Klienta] nie istnieje.

Komunikat pojawia się w sytuacji, gdy Użytkownik w System/
Konfiguracja/ Program/ Ogólne/ Praca rozproszona w kolumnie
Identyfikator partnera wpisuje numer klienta, który nie posiada konta
IWD, konto istnieje, ale nie doszło do synchronizacji lub klient nie
aktywował konta IWD po swojej stronie.
Od czasu założenia konta IWD musi minąć min. 1 godzina, zanim możliwe
będzie aktywowanie konta. Konto IWD partnera wymiany musi być aktywne,
zanim skonfigurujemy z nim wymianę.

Brak ustalonego działu. Proszę uzupełnić dane w
Konfiguracja->Firma->Ogólne->Praca rozproszona.

Komunikat oraz pusta lista po wejściu w Narzędzia/ Praca Rozproszona/
Import pokazuje się w sytuacji, gdy Użytkownik nie uzupełnił
identyfikatora w System/ Konfiguracja/ Firma/ Ogólne/ Praca
rozproszona.

Klient powinien sprawdzić czy identyfikator został uzupełniony z
zastrzeżeniem, że jeśli wymiana na tej bazie ma się odbywać z klientem
pracującym na Comarch ERP XT (dawniej: iFaktury24), w Identyfikatorze
księgowości należy wpisać KSIEG.

Wystąpił błąd. W Konfiguracji nie została ustawiona ścieżka do
katalogu przechowywania plików XML. Proszę uzupełnić dane w
Konfiguracja -> Stanowisko -> Praca rozproszona.

Komunikat pojawia się przy imporcie w Narzędzia/ Praca rozproszona/
Import w sytuacji, gdy w System/ Konfiguracja/ Stanowisko/ Praca
Rozproszona/ Parametry nie została ustawiona ścieżka do katalogu
przechowywania plików XML. Katalog ten jest wymagany.

Błąd przy imporcie paczki. Wiadomość została zaszyfrowana innym
kluczem niż aktualnie posiadany. Usuń oczekujące paczki i wyślij je
ponownie.

Komunikat pojawia się w Narzędzia/ Praca rozproszona/ Import w
sytuacji, gdy obecnie posiadany przez Użytkownika importującego paczkę
certyfikat jest inny od tego, obowiązującego w momencie wysyłki paczki
przez klienta.
Wysłanej na inny certyfikat paczki nie można będzie już odebrać i
należy ją usunąć z Narzędzia/ Skrzynka IWD. Partner wymiany powinien
wysłać paczkę ponownie. Jeśli się okaże, że podczas importu nowej
paczki pokazuje się ten sam komunikat, należy odświeżyć certyfikat w
System/ Konfiguracja/ Program/ Ogólne/ Praca rozproszona za pomocą
przycisku Odnowienie certyfikatu.


________________________________

OPT060 – Comarch ERP Optima w środowisku terminalowym

Data aktualizacji: 28-11-2018


Spis treści

Wprowadzenie

Parametry łącza

Przepustowość łącza
Jakość łącza

Konfiguracja po stronie serwera usług terminalowych

Wytyczne do konfiguracji sprzętowej dla serwera usług terminalowych
Wersja serwera terminala
Konfiguracja serwera terminali

Konfiguracja po stronie klienta

Parametry połączenia do serwera terminali po stronie klienta

Pobieranie licencji

Konfiguracja interfejsu w Comarch ERP Optima

Ustawienie skórki
Wyłączenie animacji
Zwinięcie graficznego menu (ribbon)

Drukarki fiskalne w usługach terminalowych

Instalacja i konfiguracja komponentów na serwerze
Instalacja komponentów na końcówce terminala
Licencje
Schemat połączenia do drukarki fiskalnej

Podłączenie kolektorów i kas fiskalnych

Drukowanie na drukarki i urządzenia przez wydruki XML (tekstowe/inne)

Czytniki kodów kreskowych EAN

Skanery dokumentów do współpracy z modułem OBD

Wysyłanie i odbieranie plików przez kanały wirtualne

Pozostałe uwagi dotyczące konfiguracji Comarch ERP Optimy pracującej w
usługach terminalowych


Wprowadzenie

Biuletyn przedstawia informacje na temat konfiguracji programu Comarch
ERP Optima oraz środowiska terminalowego do pracy z programem, biorąc
pod uwagę parametry łącza, konfigurację serwera, konfigurację klienta,
podłączanie urządzeń współpracujących z programem a także ustawienia
po stronie aplikacji Comarch ERP Optima. Biuletyn zakłada, że na
serwerze terminali uruchamiana jest sama Comarch ERP Optima. Natomiast
baza danych znajduje się na osobnym serwerze, którego konfiguracja
jest poza zakresem niniejszego dokumentu. Biuletyn zawiera również
informacje na temat urządzeń współpracujących z Comarch ERP Optima
oraz sposobu ich konfiguracji w środowisku terminalowym.

Parametry łącza

Przepustowość łącza

Protokół RDP ma stosunkowo niskie wymagania, jeżeli chodzi o
przepustowość. Oczywiście zależą one od parametrów sesji terminalowej
czyli ilości kolorów, włączonych opcji w kliencie zdalnego pulpitu
(szczegóły w p. 4 – Konfiguracja po stronie klienta) oraz rodzaju
wykonywanej pracy. Z praktycznego punktu widzenia można przyjąć, że
jedno połączenie przez pulpit zdalny przy głębi kolorów 16 bit zajmuje
około 80 kbit/s. Może się ono wahać od 5 kbit/s do około 150 kbit/s.
Przy czym kalkulacje wielkości łącza potrzebnego dla serwera terminali
należy przeprowadzić w oparciu o parametr Upload, czyli transfer „do
Internetu”. Ten parametr ma zwykle u dostawców Internetu znacząco
niższą wartość od „Download”, czyli szybkości pobierania danych „z
Internetu”.
Czyli dla 10 równocześnie pracujących użytkowników należy zabezpieczyć
łącze z parametrem Upload rzędu 800 kbit/s. Przepustowość łącza można
przetestować za pomocą narzędzi online dostępnych w Internecie np.
https://www.predkosc.pl/info/

Przykładowa strona pozwalająca na przetestowanie łącza internetowego

Jakość łącza

Na wydajność pracy ma również wpływ jakość łącza to znaczy wielkość
opóźnień pakietów, wariancja opóźnień (jitter) oraz straty pakietów.
Dobre jakościowo łącze, to łącze o opóźnieniach poniżej 100 ms,
wariancją opóźnień do kilkunastu ms, straty pakietów w okolicach zera.

Konfiguracja po stronie serwera usług terminalowych

Wytyczne do konfiguracji sprzętowej dla serwera usług terminalowych

Przy doborze konfiguracji sprzętowej dla serwera terminali należy
przede wszystkim zwrócić uwagę na mocne procesory. Zalecane byłyby
procesory Xeon ze rdzeniami nowej generacji (Nehalem lub nowsze) oraz
częstotliwością taktowania przynajmniej 2,6 GHz lub odpowiadające im
procesory AMD. Ilość rdzeni zależna jest od ilości użytkowników.
Zgrubnie szacując na jednym rdzeniu można uruchomić około 5
użytkowników. Przy czym jeden rdzeń należy odliczyć dla systemu
operacyjnego. Ilość pamięci RAM również powinna być dostosowana do
ilości użytkowników przeznaczając średnio około 500 MB dla jednego
użytkownika, dodatkowo przynajmniej 2 GB na potrzeby systemu Windows
plus około 1-2 GB rezerwowe. Dodatkowo należy wziąć pod uwagę, że zbyt
mała ilość pamięci RAM może doprowadzić do intensywnego wykorzystania
dysku twardego, co ostatecznie doprowadza do bardzo znaczącego spadku
wydajności całego systemu, włączając w to działające na nim aplikacje.
Do niezawodnej pracy serwera terminali zalecane jest uruchomienie
dysków w konfiguracji RAID 1, czyli mirroring. Zastosowanie szybszych
dysków (Serial SCSI 15 000 RPM lub SSD) pozwoli na szybsze wczytywanie
binariów aplikacji, a przez to korzystnie wpływa na jej wydajność.

Podsumowując dla 10 użytkowników powinno się zabezpieczyć trzy
procesory lub jeden czterordzeniowy oraz około 7-8 GB pamięci RAM.

Wersja serwera terminala

Z wersji na wersję protokół RDP jest udoskonalany dlatego zalecamy
używanie najnowszej jego wersji 8.0 dostępnej w serwerze Windows
Server 2012. Poniższa tabela przedstawia różnice w ilości przesyłania
danych (w Bajtach) przez takich samych klientów w zależności od wersji
protokołu:

Wersja klienta zdalnego pulpituSystem operacyjny po stronie serwera
BajtyZmniejszenie ilości przesłanych danych przy użyciu protokołu RDP
6.1
RDC 6.1 (Windows Server 2008)Windows Server 20087559075-
RDC 5.2 (Windows Server 2003)Windows Server 200894503510.2
RDC 5.1 (Windows XP)Windows Server 2008111856330.32

Źródło: Remote Desktop Protocol Performance
(http://download.microsoft.com/download/4/d/9/4d9ae28534314335a86e969e7a146d1b/RDP_Performance_WhitePaper.docx)

Konfiguracja serwera terminali

Na serwerze terminali należy wyłączyć wszystkie nieużywane opcje i
usługi w systemie. Szczególnie nie jest zalecane włączanie funkcji
„Środowisko pulpitu” (ang. Desktop Experience), ustawianie tapet na
pulpicie oraz uruchamianie aplikacji, które obciążają procesor i
pamięć serwera.

Ograniczenie maksymalnej głębi kolorów oraz blokowanie mapowanych urządzeń

W konfiguracji serwera terminali w celu zmniejszenia wymaganego pasma
dla połączenia można ograniczyć głębię kolorów do 15 bit. Oznacza to,
że użytkownicy mimo innych ustawień w kliencie zdalnego pulpitu będą
mogli zestawić połączenie z maksymalną zdefiniowaną ilością kolorów.
Dodatkowo dobrze jest zablokować mapowanie nieużywanych dodatkowych
urządzeń takich jak porty COM, dyski lokalne klienta i inne ze względu
na to, że każde z takich mapowań generuje dodatkowy ruch sieciowy.

Serwer Usług Terminalowych – ustawienia klienta

Konfiguracja sesji użytkowników

W konfiguracji serwera warto również dbać o to, aby na serwerze nie
„wisiały” nieużywane, rozłączone sesje terminalowe, które zajmują
zasoby serwera w szczególności pamięć. Można to zrobić ustawiając
parametry sesji użytkowników na zakładce Sesja. Przykładowe wartości
znajdują się na zrzucie ekranu, przy czym należy je dostosować do
specyfiki pracy w danym środowisku.

Serwer Usług Terminalowych – ustawienia sesji

Na powyższym zrzucie ekranu ustawienia są wyszarzone, ponieważ zostały
ustawione z poziomu polityki grupy.

Mapowanie drukarek sieciowych

Dla systemów Windows Server 2008 oraz Windows Server 2008 R2 zalecanym
sposobem mapowania drukarek jest domyślny mechanizm EasyPrinting. Nie
wymaga on żadnych dodatkowych czynności na serwerze terminali
natomiast komputer klienta musi mieć zainstalowany Microsoft .Net
Framework 3.0 SP1 oraz aplikację do połączenia przez pulpit zdalny
(Remote Desktop Connection) minimum w wersji 6.1 (aplikacja ta jest
składnikiem systemu, ale może wymagać uaktualnienia).

W przypadku systemu Windows Server 2003, aby możliwe było mapowanie
drukarki z klienta konieczna jest instalacja wszystkich sterowników
drukarek używanych przez klienta. Dodatkowo, aby mapowanie powiodło
się konieczna jest dokładna zgodność w nazwie sterownika po stronie
klienta i serwera. W przypadku problemów można skorzystać z
rozwiązania zawartego w dokumencie
http://support.microsoft.com/kb/239088.

Zmiana algorytmu kompresji

Z poziomu zarządzania politykami grup (polecenie gpedit.msc) można
zmienić domyślny algorytm kompresji, który bazuje na konfiguracji
sprzętowej komputera. Pozwala to na samodzielne dostosowanie
parametrów protokołu do warunków środowiska i konfiguracji komputera.
Polityka grup pozwalająca na zmianę algorytmu kompresji na
anglojęzycznych systemach nazywa się „Konfiguruj kompresję danych
RemoteFX”.

Konfiguracja komputera\ Szablony Administracyjne\ Składniki systemu
Windows\ Usługi pulpitu zdalnego\ Host sesji pulpitu zdalnego\
Środowisko sesji zdalnej: Konfiguruj kompresję danych RemoteFX

Mamy możliwość wprost wskazać, czy algorytm ma używać jak
najmniejszych zasobów sieciowych kosztem pamięci i procesora
(Optimized to use less network bandwidth), czy ma jak najmniej
obciążać procesor i pamięć kosztem większego zapotrzebowania na pasmo
sieciowe (Optimized to use less memory). Jest też możliwość wybrania
konfiguracji zbalansowanej pomiędzy tymi dwoma opcjami (Balanced
memory and network bandwith) oraz wyłączenie kompresji RDP (Do not use
RDP compression algorithm).

Okno konfiguracji kompresji danych RemoteFX dla sesji zdalnych

Konfiguracja po stronie klienta

Analogicznie jak w przypadku serwera najlepiej jest korzystać z
najnowszej wersji klienta zdalnego pulpitu. Dla połączeń z Windows
Server 2008 R2 powinien to być klient o wersji minimum 6.1, a
najlepiej w wersji 7.0.

Parametry połączenia do serwera terminali po stronie klienta

Głębia kolorów oraz mapowanie dodatkowych urządzeń

Dla połączeń przez Internet zalecane jest użycie ograniczonej liczby
kolorów, czyli trybu High Color (15 bit lub 16 bit). Ilość kolorów
można ustawić w kliencie połączenia przez pulpit zdalny na zakładce
Ekran.

Właściwości klienta RDP – ustawienia głębi kolorów w sesji zdalnej

W bardzo trudnych warunkach można rozważyć połączenia w trybie 256
kolorów (głębia kolorów 8 bit).

W tym celu należy zapisać ustawienia połączenia w pliku, a następnie
otworzyć plik notatnikiem i zmodyfikować parametr: Session bppi:16
ustawiając: session bpp:i:8

Właściwości klienta RDP – zapis ustawień połączenia Comarch ERP Optima
w 256 kolorach przy standardowej skórce

Dodatkowo w celu uzyskania lepszej wydajności zaleca się zmianę skórki
programu na UltraFlat.

Zablokowanie mapowania wszystkich nieużywanych elementów takich jak
porty, dyski, karty inteligentne, czy inne urządzenia Plug and Play ma
również wpływ na zmniejszenie przesyłania dodatkowych danych, a przez
co przyspiesza wyświetlanie aplikacji na wolnych łączach.

Właściwości klienta RDP – Mapowanie Zasobów lokalnych

Parametry graficzne w połączeniu zdalnego pulpitu

Znaczący wpływ na ilość zajętego pasma sieciowego przez połączenie
pulpitu zdalnego mają parametry związane z graficznymi efektami w
ramach sesji. Można je dostosować na zakładce „Wrażenia” klienta
zdalnego pulpitu, są one tam powiązane z ustawieniami szybkości
posiadanego łącza, ale można je również osobno zaznaczać i odznaczać.

Właściwości klienta RDP – Ustawienia efektów graficznych

W celu osiągnięcia najlepszej wydajności przy pracy przez wolniejsze
łącza zaleca się wyłączenie wszystkich lub prawie wszystkich
parametrów na zakładce „Wrażenia” zaczynając od góry, czyli od
parametrów „Tło pulpitu” oraz „Wygładzanie czcionek”.

Przykładowo opcja wygładzania czcionek może zwiększyć zapotrzebowanie
na przepustowość od ponad 50% nawet do prawie 800%.

Zapotrzebowanie na pasmo przy wykorzystaniu wygładzania czcionek
ClearType oraz bez stosowania tego mechanizmu.

Typ użytkownikaTekst ClearType [kbit/s]Normalny tekst
[kbit/s]Zwiększenie zapotrzebowania na pasmo przy użyciu ClearType
Pisanie i przewijanie35.622.5657.64 %
Przewijanie25.447.04260.92 %
Internet Explorer1410.4157.68794.52 %

Żródło: Remote Desktop Protocol Performance
(http://download.microsoft.com/download/4/d/9/4d9ae28534314335a86e969e7a146d1b/RDP_Performance_WhitePaper.docx)

Pobieranie licencji

Program pracujący na komputerze usług terminalowych pobiera licencje w
ten sam sposób co aplikacja pracująca „Stacjonarnie”, czyli instalacja
taka jest wyposażona w Comarch ERP Menadżer Licencji (ML).
Specyfiką usług terminalowych jest sposób zamykania sesji na serwerze
usług terminalowych, np.: gdy host który pracował z sesją stracił
połączenie do sesji na terminalu bądź też przerwał to połączenie
celowo, to w obydwu przypadkach na serwerze terminali pozostaje
pracująca sesja razem z programami uruchomionymi w niej, w tym z
Comarch ERP Optima. Konfiguracja usług terminalowych pozwala na
zarządzanie takimi sesjami na dwa sposoby – pozwala na ponowne
podłączenie się do sesji z hosta, który utracił z nią połączenie (lub
operatora który jest zalogowany w sesji) bądź pozwala na automatyczne
zamknięcie takiej sesji. Problemem może okazać się automatyczne
zamknięcie sesji, które zamyka aplikacje pracujące w tej sesji.
Licencje które zostały przydzielone Comarch ERP Optima, która została
zamknięta w taki sposób będą wciąż licencjami zajętymi,
zmniejszającymi ilość dostępnych licencji w instalacji. Żeby uniknąć
tego problemu wystarczy w Menu Widok Comarch ERP Optima wyłączyć
parametr: „Potwierdzenie zamknięcia programu”. Program z tak
ustawionym parametrem w automatycznie zamykanej sesji wyloguje
zajmowane przez siebie licencje z (ML).

Konfiguracja interfejsu w Comarch ERP Optima

W konfiguracji Comarch ERP Optima przygotowano specjalne ustawienia
pozwalające na uzyskanie lepszej wydajności przy słabszych parametrach
połączenia do serwera terminali.

Ustawienie skórki

Skórkę programu można ustawić z poziomu menu Widok po zalogowaniu do programu.

Zmiana skórki w programie Comarch ERP Optima

Wyłączenie animacji

Również w menu Widok po zalogowaniu do programu można wyłączyć
animacje w programie.

Zmiana Efektów animacji w programie Comarch ERP Optima

Zwinięcie graficznego menu (ribbon)

Obszar graficznego menu (ribbon) jest najdłużej odrysowywany dlatego
jego wyłączenie na wolnym łączu powinno poprawić szybkość ściągania
obrazu aplikacji z serwera.

Comarch ERP Optima – praca z rozwiniętą wstążką Comarch ERP Optima –
praca ze zwiniętą wstążką

Drukarki fiskalne w usługach terminalowych

System Comarch ERP Optima posiada możliwość pracy w środowisku
terminalowym. Istotnym elementem pracy tego systemu jest możliwość
korzystania z drukarek fiskalnych. Przepisy wymagają od użytkownika
umieszczenia drukarek fiskalnych na stanowisku, gdzie odbywa się
sprzedaż fiskalna.

W środowisku terminalowym oznacza to podłączenie drukarki fiskalnej do
komputera, na którym pracuje klient terminala. W przypadku systemów
Microsoft Windows Terminal Serwer do podłączenia drukarki fiskalnej do
portu COM stanowiska terminalowego można wykorzystać stworzone przez
nas oprogramowanie.

Oprogramowanie pozwala na przekazanie do końcówki terminala danych dla
drukarki fiskalnej poprzez tak zwany kanał wirtualny. Aby
przekazywanie danych do drukarki mogło mieć miejsce zarówno po stronie
końcówki terminala jak i po stronie serwera musi być zainstalowane
odpowiednie oprogramowanie, które można użytkować zgodnie z zasadami
podanymi w punkcie 7.3.

Instalacja i konfiguracja komponentów na serwerze

Program Comarch ERP Optima nawiązują połączenie z drukarką fiskalną
poprzez API udostępnione przez bibliotekę sterownika fiskalnego.
Instalacja sterowników odbywa się wraz z instalacją programu Comarch
ERP Optima. Konfiguracja programu do współpracy z drukarką podłączoną
do konsoli terminala odbywa się, poprzez wybranie odpowiednio
zmodyfikowanego sterownika przeznaczonego do pracy w TS. W
konfiguracji programu „Comarch ERP Optima System / Konfiguracja /
Stanowisko / Ogóle / Drukarka fiskalna” należy wybrać odpowiedni dla
drukarki fiskalnej sterownik z dopiskiem „terminal” w nazwie.

Instalacja komponentów na końcówce terminala

Po stronie końcówki terminala umieszczone są komponenty zajmujące się
obsługą kanału wirtualnego oraz połączeniem z drukarką fiskalną.
Pliki zawierające instalatory komponentów znajdują się w katalogu
„Drukowanie Fiskalne w usługach terminalowych – Client” (na płycie
instalacyjnej programu w katalogu Dodatki), lub bezpośrednio w
katalogu z programem Comarch ERP Optima. Plik OnlineFP.exe zawiera
instalator odpowiedni dla systemów 32 i 64 bitowych.

Aby zainstalować obsługę terminalowych drukarek fiskalnych należy:

1. Plik OnlineFP.exe przegrać na końcówkę terminala.
2. Przeprowadzić instalację obsługi sterowników terminalowych na
końcówce. Użytkownik Windows, który instaluje obsługę sterowników,
musi mieć uprawnienia administratora.

Oprogramowanie po stronie klienta składa się z plików obsługujących
kanał wirtualny i z samych sterowników do drukarek.
Wszystkie pliki kopiowane są do katalogu wskazanego podczas
instalacji. Sterowniki drukarki nawiązują połączenie z portem COM
wybranym w konfiguracji programu pracującego po stronie pulpitu
zdalnego.

Należy zwrócić uwagę również na następujące aspekty:

1. Mechanizm komunikacji z drukarkami fiskalnymi nie wykorzystuje
mapowania portów COM w samej usłudze terminalowej.
2. Przy aktualizacji wersji programu Comarch ERP Optima zaleca się
również aktualizację sterowników na końcówce terminala. Odinstalowanie
z poziomu panelu sterowania programu Comarch ERP Sterowniki i usługi
terminalowe i zainstalowanie aktualnej wersji z pliku OnlineFP.exe

Po prawidłowo wykonanej instalacji na końcówce terminala i
konfiguracji komponentów na serwerze można wykonać test połączenia z
drukarką z poziomu konfiguracji programu.

Licencje

Komponenty do współpracy z drukarką fiskalną poprzez usługi pulpitu
zdalnego wymagają licencji na „Fiskalny driver terminalowy”.
Licencje są pobierane przez Comarch ERP Optima w sesji terminalowej w
momencie wywołania pierwszej operacji chronionej licencją. Są to:
fiskalizacja i wydruk raportów fiskalnych. Licencje są zwalnianie przy
wylogowaniu się operatora z programu.

Uwaga

Do prawidłowego pobierania licencji wymagane jest wprowadzenie
bezpośrednio do programu nazwy serwera klucza.

W sytuacji, gdy baza konfiguracyjna znajduje się na tym samym
serwerze, gdzie pracuje menadżer licencji (ML), program nie wymaga
wprowadzania nazwy serwera klucza – domyślnie szuka ich na serwerze
gdzie znajduje się baza konfiguracyjna. Dla potrzeb komponentów, o
których mówi ten artykuł nazwa takiego serwera zawsze musi być
wprowadzona. Informację tą wprowadzamy w oknie logowania w polu Serwer
Klucza.

Schemat połączenia do drukarki fiskalnej

Połączenie drukarki fiskalnej w sesji terminalowej

Podłączenie kolektorów i kas fiskalnych

Komunikacja z tego typu urządzeniami odbywa się poprzez mapowanie
portów COM pomiędzy stacją roboczą a sesją na komputerze usług
terminalowych, na które pozwala protokół RDP. Z pracą tak podłączonych
urządzeń wiążą się niekiedy kłopoty z czasem przesyłania danych z
podpiętego urządzenia (z tego powodu dla drukarek fiskalnych
wprowadzone są dodatkowe kanały przesyłania danych).
Aby mapowanie urządzeń było możliwe w sesji terminalowej należy:

Po stronie serwera:
Sprawdzić czy mapowanie portów COM jest załączone w konfiguracji
serwera usług terminalowych (Terminal Server Configuration)

Serwer Usług Terminalowych – mapowanie portów

Po stronie klienta:
Załączyć parametr mapowania portów (LPT, COM) (ustawiamy to w oknie
„Podłączanie pulpitu zdalnego” Opcje: zakładka Zasoby lokalne/Lokalne
urządzenia i zasoby/Porty)

Właściwości klienta RDP – Mapowanie portów

Konfiguracja z poziomu programu wykonywana jest identycznie przy
podłączeniu urządzenia bezpośrednio do komputera, mapowane porty COM
będą widoczne jako kolejne porty na liście dostępnych portów w
systemie.

Drukowanie na drukarki i urządzenia przez wydruki XML (tekstowe/inne)

Wydruki XML (tekstowy/inne) wysyłają rezutlat wydruku zawierający dane
oraz kody sterujące dla urządzenia bezpośrednio do portu (LPT/USB/COM)
przypisanego do urządzenia.

Z reguły wysłanie tych danych odbywa się metodą kopiowania plików do
określonego portu. Może to powodować problemy przy przesyłaniu tych
danych z sesji terminalowej do urządzenia.

Uruchamiając wysłanie danych z tych wydruków w konfiguracji połączenia
należy włączyć opcję mapowania portów, identycznie jak w punkcie
Podłączenie kolektorów i Kas Fiskalnych. Ta metoda nie pozwala jednak
na wysyłanie danych do urządzeń pracującyh na portach USB, bywa też
zawodna.

Jeśli napotykamy na problem przesyłania danych bezpośrednio do
mapowanych portów możemy, zastosować dodatkowy mechanizm przesyłania
danych z wydruku do strumienia danych RAW sterownika drukarki, który
został zmapowany w sesji. Opcja mapowania drukarek w konfiguracji
połączenia sesji terminalowej musi być włączona.

Do przesyłania danych do strumienia drukarki używamy dodatkowego
programu RawPrint.exe.
Pozwala on na przesłanie pliku utworzonego w sesji do strumienia
drukarki – jako parametr podajemy nazwę pliku oraz nazwę drukarki w
systemie Windows:

RawPrint.exe “Oki ML3320 (from PCBIURO) in session 1” PlikDanych.dat

Uruchomienie wydruku w takim trybie wykonujemy zmieniając sekcję [RUN]
w definicji wydruku XML (od wersji 2013.6. możliwe jest przekazywanie
parametrów do programu uruchamianego w sekcji RUN). W tej sekcji
wprowadzamy komendę uruchamiającą program RawPrint lub kombinacje
uruchomienia programu PrintTxt
i RawPrint. Połączenie uruchomienia tych programów możemy zrealizować
za pomocą pliku bat lub cmd umieszczonego w katalogu roboczym Comarch
ERP Optima. W sekcji [RUN] podajemy nazwę pliku z komendami, np
wykonaj_wydruk.bat:

Sekcja [RUN] w definicji wydrukuProgram Printtxt w takiej sytuacji
musi być skonfigurowany tak żeby wynik drukowania był zapisywany do
pliku tekstowego, plik ten będzie wysyłany przez program RawPrint do
drukarki docelowej.

Czytniki kodów kreskowych EAN

Program obsługuje czytniki kodów kreskowych podłączane szeregowo z
klawiaturą. Czytniki te będą działać w sesji terminalowej bez
dodatkowej konfiguracji.

Skanery dokumentów do współpracy z modułem OBD

W programie Comarch ERP Optima uruchamianej przez terminal jest
możliwość podłączenia skanera. W tym celu należy zainstalować na
końcówce sieciowej aplikacji OnlineFP.exe i w konfiguracji Optimy w
gałęzi Stanowisko \ Ogólne \Parametry i załączyć parametr : Wymiana
danych z komputerem lokalnym w pracy Terminalowej.

Po wykonaniu powyższych czynności i przelogowaniu w programie Comarch
ERP Optima, Skaner powinien być dostępny z poziomu modułu Obieg
Dokumentów i pracować jak w sesji lokalnej.

Wysyłanie i odbieranie plików przez kanały wirtualne

W programie Comarch ERP Optima uruchamianej przez terminal jest
możliwość wysyłania i odbierania plików na końcówce sieciowej w
następujących funkcjach programu:

Funkcje w programie:
Eksport ustawień personalizacji.
Import urzędów,
Eksport wydruków.
Eksporty przelewów
Eksport i import kontrahentów
Export i import cennika
Eksporty do ECOD
Eksport i import danych kadrowych
Eksport wypłat
Eksport deklaracji ZUS do Płatnika
Eksport deklaracji PFRON do SODiR
Import czasu pracy z czytników RCP
Import z pliku KEDU
Eksport/import ustawień operatora.

Funkcje są dostępne w Comarch ERP Optima po zainstalowaniu na końcówce
sieciowej aplikacji OnlineFP.exe i załączeniu w konfiguracji programu
w gałęzi Stanowisko \ Ogólne \ Parametry parametru : Wymiana danych z
komputerem lokalnym w pracy terminalowej.
Dla pozostałych przypadków eksporty plików z programu wykonywane są na
dyski serwera usług terminalowych, chyba że przy połączeniu
terminalowy mapujemy dyski stacji lokalnej, to wówczas możemy pliki
zapisać w tych lokalizacjach.

Pozostałe uwagi dotyczące konfiguracji Comarch ERP Optimy pracującej w
usługach terminalowych

Uruchamianie Comarch ERP Przypominacz – program uruchomi się podczas
logowania na serwer terminalowy, jeżeli nie było aktywnej sesji
logującego się użytkownika; jeżeli użytkownik podłącza się pod
istniejącą sesję, to program się nie uruchomi.

Podpis elektroniczny dla e-maili, PDFów, e-Deklaracji – działa po
konfiguracji certyfikatów po stronie serwera usług terminalowych bądź
dla przekazywanie certyfikatów po stronie stanowiska. I tak:

Dla certyfikatów po stronie stanowiska sieciowego musimy zainstalować
obsługę kanałów wirtualnych przez aplikację OnlineFP.exe a następnie
załączyć w konfiguracji Comarch ERP Optima w gałęzi Stanowisko \
Ogólne \ Parametru parametr : Wymiana danych z komputerem lokalnym w
pracy terminalowej.
Dla certyfikatów po serwera usług terminalowych certyfikaty klienta
muszą być przeniesione na system z usługami terminalowymi. Na
terminalu i serwerze należy zainstalować komponenty obsługi podpisu
elektronicznego, dostarczane przez jego producenta. W opcjach
połączenie zdalnego należy zaznaczyć „Mapuj zasoby lokalne – karty
inteligentne”.

Współpraca z programem Płatnik – Możliwa jest na dwa sposoby:

Przez tworzenie plików dla płatnika z użyciem kanałów wirtualnych
(Program płatnik pracuje po stronie stanowiska sieciowego)-punkt
Wysyłanie i odbieranie plików przez kanały wirtualne,
Bądź przez instalacje Płatnika bezpośrednio na serwerze ( program
Płatnik będzie pracował „po stronie” serwera TS ).


Menadżer Licencji powinien zostać skonfigurowany na komputerze z
serwerem SQL, który znajduje się w tej samej sieci lokalnej co serwer
terminalowy. Innymi słowy przy połączeniu przez Internet do serwera
terminali nie ma możliwość korzystania z licencji po stronie Klienta,
czyli Menadżera Licencji zainstalowanego w sieci lokalnej stanowiska,
z którego uruchamiamy połączenie pulpitu zdalnego.

________________________________

OPT035- Rozliczenie czasu pracy w modułach płacowych

Data aktualizacji: 28-11-2018


Spis treści

Wstęp

Normy i wymiar czasu pracy w przepisach

Pojęcie normy czasu pracy (art. 129 k.p.)
Pojęcie wymiaru czasu pracy (art. 130 k.p.)
Wymiar czasu pracy niepełnoetatowca

Harmonogramy czasu pracy (plany pracy)

Konfiguracja pojedynczego kalendarza

Konfiguracja wszystkich kalendarzy

Plan pracy i czas przepracowany pracownika

Plan pracy
Sposoby odnotowywania czasu przepracowanego

Nadgodziny

Pojęcie pracy w nadgodzinach (art. 151 k.p.)
Wynagradzanie za nadgodziny (art. 1511 k.p.)
Nadgodziny dobowe i średniotygodniowe

Rozliczanie nadgodzin wg norma zgodna z planem pracy

Parametry w konfiguracji
Przykłady rozliczenia nadgodzin wg norma zgodna z planem pracy
Bilansowanie w rozliczeniu nadgodzin wg norma zgodna z planem pracy

Rozliczanie nadgodzin wg normy dobowej i normy średniotygodniowej

Parametry w konfiguracji
Przykłady rozliczenia nadgodzin wg normy dobowej i średniotygodniowej
Bilansowanie w rozliczeniu nadgodzin wg normy dobowej i średniotygodniowej

Czas wolny za nadgodziny – Płace i Kadry Plus

Rekompensata za pracę w nadgodzinach – czasem wolnym
Ilość czasu wolnego za nadgodziny
Czas wolny za nadgodziny w programie
Wynagrodzenie za czas wolny (udzielony za nadgodziny)
Przykłady udzielania czasu wolnego za nadgodziny w dni pracy
Przykłady udzielania czasu wolnego za nadgodziny w dni wolne do normy dobowej

Wydruki ewidencji czasu pracy


Wstęp

Dokument jest przeznaczony dla Użytkowników systemu Comarch ERP Optima
– modułów: Płace i Kadry lub Płace i Kadry Plus – jako pomoc w
skonfigurowaniu dostępnych w programie parametrów w celu rozliczenia
czasu pracy pracowników, a szczególnie naliczenia nadgodzin.
Ze względu na to, że przepisy dotyczące nadgodzin są bardzo
rozbudowane i skomplikowane, to duża część dokumentu została
poświęcona ich interpretacji. Opisy sposobów konfiguracji oraz
rozliczania czasu pracy zostały przedstawione na przykładach
praktycznych.

Normy i wymiar czasu pracy w przepisach

Pojęcie normy czasu pracy (art. 129 k.p.)

Normy to maksymalne liczby godzin do przepracowania w przyjętym
okresie rozliczeniowym, które określa art.129 kodeksu pracy.

Art. 129. § 1. Czas pracy nie może przekraczać 8 godzin na dobę i
przeciętnie 40 godzin w przeciętnie pięciodniowym tygodniu pracy w
przyjętym okresie rozliczeniowym nieprzekraczającym 4 miesięcy, z
zastrzeżeniem art. 135-138, 143 i 144.
§ 2. W każdym systemie czasu pracy, jeżeli jest to uzasadnione
przyczynami obiektywnymi lub technicznymi lub dotyczącymi organizacji
pracy, okres rozliczeniowy może być przedłużony, nie więcej jednak niż
do 12 miesięcy, przy zachowaniu ogólnych zasad dotyczących ochrony
bezpieczeństwa i zdrowia pracowników.

W pozakodeksowych ustawach spotkać można inne, obniżone normy czasu
pracy dla pewnych grup pracowniczych. Jest to np. norma dobowa – 7h i
średniotygodniowa – 35h dla osób niepełnosprawnych.

Pojęcie wymiaru czasu pracy (art. 130 k.p.)

Wymiar czasu pracy to liczba godzin, którą pracownik powinien
przepracować w przyjętym okresie rozliczeniowym, wyliczana zgodnie
art.130 kodeksu pracy.

Art. 130. § 1. Obowiązujący pracownika wymiar czasu pracy w przyjętym
okresie rozliczeniowym, ustalany zgodnie z art. 129 § 1, oblicza się:
1) mnożąc 40 godzin przez liczbę tygodni przypadających w okresie
rozliczeniowym, a następnie
2) dodając do otrzymanej liczby godzin iloczyn 8 godzin i liczby dni
pozostałych do końca okresu rozliczeniowego, przypadających od
poniedziałku do piątku.
§ 2. Każde święto występujące w okresie rozliczeniowym i przypadające
w innym dniu niż niedziela obniża wymiar czasu pracy o 8 godzin.

Poniżej przykłady wyliczenia wymiaru czas pracy w jednomiesięcznych
okresach rozliczeniowych w 2018 r.

Przykład

Ustalenie wymiaru czasu pracy dla miesiąca stycznia 2018 r.
– liczba tygodni: 1-7, 8-14, 15-21, 22-28, czyli 4 tygodnie * 40h = 160h,
– liczba dni wystających, które mieszczą się w zakresie od
poniedziałku do piątku: 29, 30, 31, czyli 3 dni * 8h = 24h,
– pomniejszenie za święta przypadające w innym dniu niż niedziela: 1
(Nowy Rok), 6 (Trzech Króli), czyli 2 dni * 8h = 16h,
– wyliczenie wymiaru: 160h + 24h – 16h = 168h
Za święto przypadające w sobotę (Trzech Króli) należy wyznaczyć
dodatkowy dzień wolny.

Przykład

Ustalenie wymiaru czasu pracy dla miesiąca maja 2018 r.
– liczba tygodni: 1-7, 8-14, 15-21, 22-28, czyli 4 tygodnie * 40h = 160h,
– pozostała liczba dni: 29, 30, 31, które mieszczą się w zakresie od
poniedziałku do piątku, czyli 3 dni * 8h = 24h,
– pomniejszenie za święta przypadające w innym dniu niż niedziela: 1,
3, 31 czyli 3 dni * 8h = 24h,
– wyliczenie wymiaru: 160h + 24h – 24h = 160h

2018 - MiesiąceLiczba dniNorma dobowaWYMIAR
Styczeń218168
Luty208160
Marzec228176
Kwiecień208160
Maj208160
Czerwiec218168
Lipiec228176
Sierpień228176
Wrzesień208160
Październik238184
Listopad218168
Grudzień198152
SUMA251-2008
Zestawienie wymiarów czasu pracy w 2018 roku dla okresów
jednomiesięcznych przy wyznaczeniu soboty jako dodatkowego dnia
wolnego w przeciętnie pięciodniowym tygodniu pracy

Wymiar czasu pracy niepełnoetatowca

Pracownik zatrudniony na część etatu powinien mieć obniżony wymiar
czasu pracy w okresie rozliczeniowym proporcjonalnie do wymiaru
zatrudnienia. Praca może być przez takiego pracownika świadczona
przeciętnie 5 dni w tygodniu, we wszystkie dni robocze w mniejszym
wymiarze dobowym, bądź w niektóre dni tygodnia przez większą liczbę
godzin.

Przykład

Ustalenie wymiaru czasu pracy dla pracownika zatrudnionego na ¾ etatu,
dla 3-miesięcznego okresu rozliczeniowego (10-12 2018 r.).
– suma wymiarów z 3 miesięcy: 184 + 168 + 152 = 504h
– wyliczenie wymiaru: mnożymy przez wymiar etatu: 488h* ¾ = 378h

Pracodawca powinien pamiętać o ustaleniu dla zatrudnionego na część
etatu tzw. limitu godzin. Stosownie, bowiem do art. 151 § 5 K.p.,
strony ustalają w umowie o pracę dopuszczalną liczbę godzin pracy
ponad określony w umowie wymiar czasu pracy pracownika zatrudnionego w
niepełnym wymiarze czasu pracy, których przekroczenie uprawnia
pracownika, oprócz normalnego wynagrodzenia, do dodatku do
wynagrodzenia, o którym mowa w art. 1511 § 1.

Ustalenie limitu zależy od okoliczności faktycznych, a zwłaszcza od
rozkładu czasu pracy danego pracownika. Sposoby jego ustalenia w
umowach o pracę są różne, a mianowicie można go określić przez
wskazanie wymiaru dobowego – np. „praca powyżej 5 godzin na dobę” albo
wielkości etatu – np. „praca przekraczająca wymiar 3/4 etatu”.

W programie Comarch ERP Optima Płace i Kadry można określić limit
nadgodzin dla niepełnoetatowca poprzez jako wprowadzenie odpowiedniej
normy dobowej i średniotygodniowej (niższej niż dla pełnego etatu).

Harmonogramy czasu pracy (plany pracy)

Harmonogram czasu pracy jest sprecyzowanym planem pracy pracownika
(lub grupy pracowników), który powinien być zdefiniowany zgodnie z
przepisami.
Powinnością pracodawcy jest ustalenie wymiaru czasu pracy
(proporcjonalnie do jego wymiaru etatu) przed rozpoczęciem danego
okresu rozliczeniowego i jego „rozłożenie” na poszczególne dni tego
okresu z uwzględnieniem:

obowiązujących pracownika norm czasu pracy,
godzin rozpoczęcia i zakończenia pracy,
odpoczynku dobowego i tygodniowego,
przeciętnie pięciodniowego tygodnia pracy,
zakazu pracy w niedziele i święta (a gdy jest dozwolona praca w
niedzielę – wyznaczenie jednej na 4 tygodnie niedzieli wolnej od
pracy).

Kontrola zgodności tworzonego harmonogramu czasu pracy z przepisami
należy do Użytkownika programu.

Harmonogramy czasu pracy definiujemy w programie Comarch ERP Optima w
Konfiguracja/ Firma/ Płace/ Kalendarze. Z tego poziomu można dodać
dowolną ilość kalendarzy, zgodnie z zapotrzebowanie firmy.
Standardowo w programie podczas kreowania nowej bazy tworzony jest
kalendarz o nazwie STANDARD z dniami pracy od poniedziałku do piątku
(w godzinach od 7:00 do 15:00) z wyznaczonymi świętami w aktualnym i
kolejnym roku.
Symbol na poszczególnych dniach kalendarza oznacza, że nie były one
jeszcze definiowane i przyjmują domyślne ustawienia.
Sposób tworzenia i definiowania kalendarzy opisany jest szczegółowo w
podręczniku do konfiguracji programu.

Rys 1. W konfiguracji – kalendarz Standard – zakładka Kalendarz (z
naniesionymi standardowymi świętami)

Konfiguracja pojedynczego kalendarza

Z poziomu Konfiguracja/ Firma/ Płace/ Kalendarze – na karcie danego
kalendarza normatywnego (harmonogramu) występują pola:

Uwzględniaj wymiar etatu – powinien być zaznaczony dla kalendarzy
pracowników zatrudnionych na niepełny etat, którzy mają obowiązek
pracować w te same dni, co pracownicy pełnoetatowi, lecz w skróconym
wymiarze czasu pracy. Jeśli pracownik zatrudniony na ½ etatu ma
pracować np. co drugi dzień po 8 godzin, to definiujemy dla niego
osobny kalendarz i odznaczamy ten parametr.
Modyfikowanie planu pracy przez nieobecność – ma znaczenie, gdy w
planie pracy (harmonogramie) stosujemy inną strefę niż „Czas pracy
podstawowy”, wówczas wymagane jest zaznaczenie tego parametru.
Powoduje on przywrócenie strefy „Czas pracy podstawowy” w planie pracy
na dni wprowadzonych nieobecności. Jest to istotne, aby program dobrze
pomniejszał wynagrodzenie zasadnicze za czas nieobecności.

Rys 2. W konfiguracji – definicja kalendarza Standard – zakładka
Ogólne (fragment)

W obszarze Nadgodziny / godziny nocne dostępne są parametry:

Rozliczaj nadgodziny – zaznaczenie parametru umożliwia rozliczaniem
nadgodzin przez program.
Licz standardowe dopłaty do nadgodzin – zaznaczony parametr powoduje,
że program będzie generował standardowe dopłaty do nadgodzin (50%,
100%).
Licz standardowe wynagrodzenie powyżej/poniżej normy – decyduje, czy
program będzie naliczał wynagrodzenie powyżej/poniżej normy
(standardowo w wynagrodzeniu zasadniczym lub w innych dodatkach).
Jeśli to wynagrodzenie powyżej/poniżej normy ma być liczone jako
osobny element wypłaty (poza wynagrodzeniem zasadniczym), to należy
dodatkowo zaznaczać parametr „Wynagrodzenie powyżej/poniżej normy
liczone jako oddzielny element wypłaty” w Konfiguracja/ Firma/ Płace/
Parametry.
Licz standardowe dopłaty do godzin nocnych – zaznaczony parametr
powoduje, że będą naliczane dopłaty do godzin nocnych.
Norma zgodna z planem pracy – zaznaczony parametr oznacza, że norma do
wyliczenia nadgodzin będzie przyjmowana z planu pracy.
Jeśli nadgodziny mają być rozliczane zgodnie z normami kodeksowymi:
dobową i średniotygodniową, to wyłączamy opcję [ ] Norma zgodna z
planem pracy i wpisujemy odpowiednie wartości w pola:
–Norma dobowa: standardowo 8h
–Norma średniotygodniowa: standardowo 40h
Parametr Z uwzględnieniem przedłużonych dobowych wymiarów z planu
pracy (równoważny czas pracy) ma zastosowanie np. w równoważnym
systemie czasu pracy, gdzie dopuszczalne jest wydłużenie dobowego
wymiaru czasu pracy (ponad 8h) jednego dnia, które powinno być
rekompensowane skróceniem dobowego wymiaru czasu pracy (poniżej 8h) w
innym dniu lub udzieleniem dnia wolnego od pracy. Po zaznaczeniu tego
parametru, praca w godzinach nadliczbowych dobowych będzie liczona
następująco:
–W dniach pracy – program będzie sprawdzał oprócz normy dobowej
określonej w definicji kalendarza w konfiguracji, również dobowy
wymiar czasu pracy ustalony w planie pracy (harmonogramie) pracownika.
-W dniach wolnych od pracy / świątecznych – program będzie sprawdzał
tylko normę dobową określoną w definicji kalendarza.
Parametr Z uwzględnieniem standardowych świąt – ma wpływ na wyliczenie
normy do nadgodzin uwzględnianej przy sprawdzaniu, czy doszło do
przekroczenia normy średniotygodniowej. Gdy parametr jest:
-Zaznaczony – to norma do nadgodzin (liczona jako pełne tygodnie * 40h
+ brzegowe dni * 8h) jest pomniejszona o ustawowe święta przypadające
w innych dniach niż niedziela (zapisane w programie), niezależnie od
tego, czy zostały naniesione w planie pracy.
-Niezaznaczony – to norma do nadgodzin jest pomniejszana o święta
wpisane na planie pracy w innych dniach niż niedziela.
Parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe – ma
wpływ na wyliczenie dopłat do nadgodzin. Gdy parametr jest:
-Zaznaczony – w przypadku okresu rozliczeniowego dłuższego niż
miesiąc, dopłaty do nadgodzin dobowych są naliczane w miesiącu
wystąpienia nadgodzin, natomiast dopłaty do nadgodzin
średniotygodniowych na koniec okresu rozliczeniowego. Jako rozliczenie
nadgodzin w wypłacie generują się standardowe typy wypłat: Dopłata do
nadgodzin dobowych 50%, Dopłata do nadgodzin dobowych 100%, Dopłata do
nadgodzin średniotygodn. 100%. (Dla okresu 1 miesięcznego też
występuje podział na dopłaty dobowe i średniotygodniowe).
-Niezaznaczony – w przypadku okresu rozliczeniowego dłuższego niż
miesiąc, dopłaty do nadgodzin (dobowych i średniotygodniowych) są
naliczane w wypłacie za ostatni miesiąc okresu rozliczeniowego. Jako
rozliczenie generują się standardowe elementy Dopłaty do nadgodzin
50%, Dopłaty do nadgodzin 100%.
Algorytm bilansowania nadgodzin w rozliczanym okresie zależy od
parametru Podział dopłat na nadgodziny dobowe i średniotygodniowe i
gdy ten parametr jest:
Zaznaczony – to dostępne są opcje:
–Tylko średniotygodniowe – nadgodziny dobowe nigdy nie są bilansowane,
a na koniec okresu rozliczeniowego nadgodziny średniotygodniowe są
bilansowane niedogodzinami oraz nieobecnościami nieusprawiedliwionymi
z całego okresu rozliczeniowego.
–Średniotygodniowe, dobowe 100%, 50% – w pierwszej kolejności
pomniejszane są nadgodziny średniotygodniowe na koniec okresu
rozliczeniowego pod warunkiem, że ich ilość jest wystarczająca do
zbilansowania wszystkich niedogodzin. W przypadku, gdy ilość nadgodzin
średniotygodniowych od początku okresu rozliczeniowego nie jest
wystarczająca, to występujące niedogodziny będą na bieżąco bilansować
nadgodziny dobowe – w pierwszej kolejności 100%, potem 50%.
Nieobecności nieusprawiedliwione nigdy nie bilansują nadgodzin
dobowych, tylko średniotygodniowe.
–Średniotygodniowe, dobowe 50%, 100% – działanie opisane jak wyżej,
tylko kolejność bilansowania nadgodzin dobowych jest najpierw 50%,
potem 100%.
Niezaznaczony – to dostępne są opcje:
–Nie bilansuj – w przypadku rozliczania nadgodzin wg normy dobowej i
średniotygodniowej ale bez podziału niedogodziny i nieobecności
nieusprawiedliwione nie pomniejszą nadgodziny dobowych, natomiast
pomniejszają nadgodziny średniotygodniowe. A w przypadku rozliczania
nadgodzin wg „Norma zgodna z planem pracy” – niedogodziny i
nieobecności nieusprawiedliwione nie pomniejszą żadnych nadgodziny.
–100%, 50% – niedogodziny oraz nieobecności nieusprawiedliwione
(NN-ki) w pierwszej kolejności pomniejszają nadgodziny wynagradzane
dopłatami 100%, potem 50%.
–50%, 100% – działąnie jak powyżej, tylko kolejność odwrotna –
najpierw pomniejszane są nadgodziny wynagradzane dopłatami 50%, potem
100% (odwrotnie niż algorytm: 100%, 50%).

Rys 3. Definicja kalendarza – obszar dot. nadgodzin

Rozliczenie dopłat do nadgodzin w wielomiesięcznych okresach
rozliczeniowych (funkcjonalność wykorzystywana tylko w module Płace i
Kadry Plus):
Co – określa długość okresu rozliczeniowego – przykładowo:
1 (domyślnie) – oznacza okres 1 miesięczny, czyli wszystkie dopłaty do
nadgodzin naliczane są w miesiącu, w którym wystąpiły,
3 – oznacza okres 3 miesięczny i dopłaty do nadgodzin wypłacane są
zależnie od ustawień parametru „Podział dopłat na nadgodziny dobowe i
średniotygodniowe” – tzn. gdy będzie:
-Zaznaczony – to dopłaty do nadgodzin dobowych wypłacane będą na
bieżąco (co miesiąc) a dopłaty średniotygodniowe na koniec okresu
rozliczeniowego (co 3 mc).
-Niezaznaczony – to wszystkie dopłat do nadgodzin zostaną wypłacone na
koniec okresu rozliczeniowego (w 3 miesiącu).
Z przesunięciem – oznacza przesunięcie początku okresu rozliczania
nadgodzin względem początku roku (dotyczy okresów co najmniej 2
miesięcznych) – przykładowo:
0 – pierwszy okres rozliczeniowy w roku rozpoczyna się w styczniu,
1 – pierwszy okres rozliczeniowy rozpoczyna się w lutym (jest
przesunięty o 1 miesiąc względem stycznia),
2 – pierwszy okres rozliczeniowy rozpoczyna się w marcu (jest
przesunięty o 2 miesiące względem stycznia).
Z opóźnieniem – opcja możliwa do ewentualnego użycia tylko, gdy nie ma
włączonego podziału dopłat na nadgodziny dobowe i średniotygodniowe –
oznacza przesunięcie wypłat dopłat do nadgodzin względem ostatniego
miesiąca okresu rozliczeniowego– przykładowo:
0 – dopłaty do nadgodzin zostaną wypłacone w ostatnim miesiącu okresu
rozliczeniowego,
1 – wypłata dopłat do nadgodzin nastąpi w pierwszym miesiącu po
zakończeniu okresu rozliczeniowego (np. okres rozliczeniowy styczeń –
marzec zostanie rozliczony w kwietniu).

Uwaga

Wynagrodzenie powyżej/poniżej normy (podstawowe wynagrodzenie)
rozliczane jest zawsze w miesiącu wystąpienia nadgodzin.

W obszarze Parametry dotyczące dopłat występuje podział na:

Dopłaty do godzin nocnych – poniższe ustawienia dotyczące naliczania
dopłat do godzin nocnych, odnoszą się tylko do pracowników, którzy są
rozliczani według danego kalendarza.

Ręczna edycja parametrów związanych z dopłatami do godzin nocnych –
zaznaczenie parametru powoduje, że dopłaty do godzin nocnych naliczane
są zgodnie z ustawieniami zawartymi na formularzu kalendarza. Jeśli
parametr nie jest zaznaczony, dopłata do godzin nocnych naliczana jest
według ustawień dostępnych z poziomu: Konfiguracja/ Firma/ Płace/
Konfiguracja kalendarzy.
Po zaznaczeniu tego parametru, aktywne stają się pozostałe parametry
dotyczące naliczania dopłat do godzin nocnych. Domyślnie podpowiadają
się takie wartości, jak te w Konfiguracji kalendarzy, ale Użytkownik
może je zmienić.
Modyfikowanie planu pracy przez nieobecność – ma znaczenie, gdy w
planie pracy (harmonogramie) stosujemy inną strefę niż „Czas pracy
podstawowy”, wówczas wymagane jest zaznaczenie tego parametru.
Powoduje on przywrócenie strefy „Czas pracy podstawowy” w planie pracy
na dni wprowadzonych nieobecności. Jest to istotne, aby program dobrze
pomniejszał wynagrodzenie zasadnicze za czas nieobecności.
– Od godziny – Do godziny – w tych polach należy ustawić porę nocną
obowiązującą pracowników rozliczanych wg tego kalendarza.
– Limit godzin nocnych – maksymalna liczba godzin przypadających dla
każdego dnia w porze nocnej, za którą pracownikowi przysługuje dopłata
za pracę w nocy.
– Dopłata do godzin nocnych liczona od i Procent wynagrodzenia za
pracę w nocy – dla dopłat do godzin nocnych należy określić procent i
wskazać, czy ma być liczona od minimalnej płacy, czy od stawki
zaszeregowania pracownika.
– Dopłata do godzin nocnych liczona zgodnie z normą k.p. art.130 –
zaznaczenie parametru powoduje, że dopłata do godzin nocnych naliczana
jest w oparciu o wymiar czasu pracy wynikający
z art. 130 k.p. Jeśli parametr nie jest zaznaczony, to przy wyliczeniu
stosowany jest wymiar czasu pracy wynikający z planu pracy pracownika.

Rys 4. Definicja kalendarza – obszar dot. dopłat do godzin nocnych

Dopłaty do nadgodzin – poniższe ustawienia dotyczące naliczania dopłat
do nadgodzin i odnoszą się tylko do pracowników, którzy są rozliczani
według danego kalendarza.

Ręczna edycja parametrów związanych z dopłatami do nadgodzin –
zaznaczenie parametru powoduje, że dopłaty do nadgodzin naliczane są
zgodnie z ustawieniami zawartymi na formularzu kalendarza. Jeśli
parametr nie jest zaznaczony, dopłaty naliczane są według ustawień
dostępnych z poziomu: Konfiguracja/ Firma/ Płace/ Konfiguracja
kalendarzy.
Po zaznaczeniu tego parametru, aktywne stają się pozostałe parametry
dotyczące naliczania dopłat do nadgodzin. Domyślnie podpowiadają się
takie wartości, jak te w Konfiguracji kalendarzy, ale Użytkownik może
je zmienić.
– Procent dopłat ‘50’ – możliwość określenia procentu dopłat za
nadgodziny standardowo naliczanych jako 50%,
– Procent dopłat ‘100’ – możliwość określenia procentu dopłat za
nadgodziny standardowo naliczanych jako 100%,
– Dopłaty do nadgodzin liczone zgodnie z normą k.p. art. 130 –
zaznaczenie parametru powoduje, że stawka dopłaty za jedną nadgodzinę
liczona jest w oparciu o wymiar czasu pracy wynikający
z art. 130 k.p. Jeśli parametr nie jest zaznaczony, to przy wyliczeniu
stosowany jest wymiar czasu pracy wynikający z planu pracy pracownika.

Rys 5. Definicja kalendarza – obszar dot. dopłat do nadgodzin

Dodatkowo w Konfiguracja/ Firma/ Płace/ Zaokrąglenia w części
Zaokrąglenia dopłat do godzin nocnych i nadgodzin można ustawić sposób
zaokrąglania dopłat. Domyślnie ustawienie to: Wartość końcowa z
precyzją 0.01 (do 1 grosza). Można zmienić zaokrąglenie na: Kwota za
1h oraz ewentualnie precyzję.

Rys 6. Zaokrąglenia dot. dopłat do godzin nocnych i nadgodzin

Konfiguracja wszystkich kalendarzy

Z poziomu Konfiguracja/ Firma/ Płace/ Konfiguracja kalendarzy
ustawiamy wspólne elementy dla wszystkich zdefiniowanych w bazie
kalendarzy.

Rys7.Konfiguracja kalendarzy

W obszarze Godziny nocne występują parametry:

Od godziny / do godziny – zakres godzin, pomiędzy którymi praca będzie
traktowana jako praca w nocy,
Limit godzin nocnych – dzienny limit godzin nocnych – 8 godzin (zgodne
z przepisami)
Procent dopłat do godzin nocnych – 20% (zgodnie z przepisami)
Dopłata do godzin nocnych liczona od – określamy podstawę, od której
będzie naliczana dopłata do godzin nocnych (minimalne wynagrodzenie
lub stawka zaszeregowania).

Dodatkowo w definicji danego kalendarza mamy możliwość ustawienia
powyższych parametrów.

W obszarze Nadgodziny 100% dostępne są ustawienia:

Godziny nocne – parametr domyślnie zaznaczony, nadgodziny w porze
nocnej powinny być wynagradzane dopłatą w wysokości 100%.
Niedziele i święta – parametr domyślnie zaznaczony, każda nadgodzina
pracy w niedzielę i święto, w które nie było zaplanowanej pracy,
powinna być wynagradzana dopłatą w wysokości 100%.
Dni wolne (poniżej normy dobowej) – zaznaczenie spowoduje naliczenie
100% dopłat do nadgodzin nieprzekraczających normy dobowej w dniach
wolnych pracownika. Parametr domyślnie zaznaczony, nadgodziny
wynikające z przekroczenia normy średniotygodniowej powinny być
wynagradzane dodatkiem w wysokości 100%.

Uwaga

Powyższe parametry dostępne są tylko przy rozliczaniu nadgodzin „wg
planu pracy”. Dla rozliczeń wg norm: dobowa i średniotygodniowej – nie
podlegają zmianie.

Dni wolne (powyżej normy dobowej) – zaznaczenie jest równoznaczne z
wypłatą 100% dopłat do nadgodzin w dni wolne po przekroczeniu normy
dobowej. Program umożliwia ustawienie warunków wynagradzania
korzystniejszych dla pracownika niż przewidują to przepisy.
Dni pracy po przekroczeniu dobowego limitu nadgodzin 50% – ściśle
związany jest z innym parametrem ‘Dobowy limit nadgodzin 50% w dni
pracy’. Parametr zaznaczony powoduje, że praca w nadgodzinach w dni
pracy do limitu będzie płatna dopłatą 50%, a nadgodziny powyżej limitu
– dopłatą 100%. Dawniej dwie pierwsze nadgodziny były płatne 50%,
kolejne 100%. Obecnie ten przepis już nie obowiązuje, jednak w
wewnętrznych regulaminach firmy mogą być zachowane poprzednie zasady,
dlatego nadal można korzystać z tych ustawień.

W obszarze Dopłaty do nadgodzin można określić:

Limit roczny – 150:00 (standardowo) z opcją:
-Przerwanie naliczania – w wypłacie zostaną rozliczone tylko
nadgodziny do limitu, powyżej limitu nie zostaną naliczone,
-Brak – nie ma kontroli limitu nadgodzin.

Dla każdego pracownika, na formularzu etatu, można ustalić
indywidualny limit. Wówczas wartość limitu będzie pobierana z
formularza pracownika a nie z konfiguracji.

Procent dopłat ‘50’ / Procent dopłat ‘100’ – w sytuacjach, gdy
wewnętrzne przepisy pracodawcy przewidują wyższą kwotę dopłat do
nadgodzin, mamy możliwość ustawienia własnych procentów dopłat (np.
60% i 120%). Dodatkowo w definicji danego kalendarza mamy możliwość
ustawienia indywidualnych procentów dopłat do nadgodzin.

Plan pracy i czas przepracowany pracownika

Plan pracy

Na formularzu pracownika, zakładka [Etat], w polu Kalendarz wskazujemy
plan (harmonogram) czasu pracy zgodnie, z którym pracownik ma
pracować. Domyślnie podpowiada się kalendarz Standard. (Oczywiście
można wybrać inny harmonogram, jeżeli został wcześniej zdefiniowany w
Konfiguracja/ Firma/ Płace/ Kalendarze).

Rys 8. Formularz pracownika – zakładka Etat – określenie Kalendarza
(harmonogramu).

Plan pracy (harmonogram) pracownika dostępny jest z formularza
pracownika lub listy pracowników (dla podświetlonego pracownika) po
rozwinięciu menu przy ikonie

Z poziomu planu pracy danego pracownika istnieje możliwość
modyfikowania harmonogramu poprzez wprowadzenie tzw. „wyjątków”. W
celu zmian wystarczy edytować dany dzień i ustawić odpowiedni typ
dnia, godziny pracy (od do) oraz strefę czasu pracy (np. „Czas pracy
podstawowy” – skrót PP).

Uwaga

W planie pracy pracownika powinien być ustalony wymiar czasu pracy
zgodnie z art. 130 k.p. Nie należy planować pracy w nadgodzinach.

Rys 9. Plan pracy pracownika z naniesionymi modyfikacjami („wyjątkami”)

Sposoby odnotowywania czasu przepracowanego

W formularzu pracownika, zakładka [Etat], w polu Rozliczenie czasu
pracy określamy sposób odnotowywania czasu rzeczywiście
przepracowanego przez pracownika, do wyboru mamy 3 sposoby:

Według kalendarza (domyślna opcja) – w kalendarzu Nie/obecności
(rzeczywistym) na zakładce Kalendarz, czas pracy w danym dniu jest
automatycznie przepisany z planu pracy. Użytkownik odnotowuje
ewentualne zmiany w stosunku do planu na konkretnym dniu, np.
nadgodziny. (Brak wpisu w danym dniu pracy oznacza pracę zgodną z
planem pracy).
Według obecności – w kalendarzu Nie/obecności (rzeczywistym), na
zakładce Kalendarz, czas pracy w danym dniu nie jest automatycznie
przepisywany z planu pracy (jest zerowy). Użytkownik musi każdy dzień
pracy edytować i wprowadzić czas pracy (podpowiadany jest czas z planu
pracy). W przypadku posiadania modułu Kadry i Płace PLUS możliwe jest
zaimportowanie czasu pracy z pliku RCP. (Brak wpisu w danym dniu pracy
oznacza dzień z zerowym czasem pracy, czyli niedgogodziny).
Według zestawienia – dla tego sposobu brak jest informacji o czasie
pracy w danym dniu, jest tylko łączny czas pracy za odpowiedni okres.
W kalendarzu Nie/obecności (rzeczywistym) na zakładce [Zestawienia],
użytkownik musi dodać zestawienie wpisując łączny czas przepracowany w
godzinach (wraz z nadgodzinami) i w dniach, dodatkowo odnotowuje ilość
godzin nocnych oraz nadgodzin 50% i 100%, za które program powinien
naliczyć dopłaty. Zestawienie obejmuje maksymalnie okres miesiąca.
Krótszy okres powinien być wpisany w przypadku aktualizacji danych
pracownika w trakcie miesiąca lub zatrudnienia czy zwolnienia
pracownika w trakcie miesiąca.

Rys 10. Formularz pracownika – zakładka Etat – określenie sposobu
rozliczania czasu rzeczywistego
Uwaga

Bez względu na sposób wprowadzania czasu przepracowanego, pracownik
powinien mieć poprawnie zdefiniowany plan pracy (zgodnie z
przepisami). Ma to istotne znaczenie przy wprowadzaniu nieobecności
dla pracownika, ponieważ program pomniejsza czas pracy o daną
nieobecność pobierając ilość godzin zaplanowaną w tym dniu w planie
pracy.

Nadgodziny

Pojęcie pracy w nadgodzinach (art. 151 k.p.)

Pojęcie pracy w nadgodzinach wyjaśnia art. 151 kodeksu pracy:

Art. 151. § 1. Praca wykonywana ponad obowiązujące pracownika normy
czasu pracy, a także praca wykonywana ponad przedłużony dobowy wymiar
czasu pracy, wynikający z obowiązującego pracownika systemu i rozkładu
czasu pracy, stanowi pracę w godzinach nadliczbowych. Praca w
godzinach nadliczbowych jest dopuszczalna w razie:

1) konieczności prowadzenia akcji ratowniczej w celu ochrony życia lub
zdrowia ludzkiego, ochrony mienia lub środowiska albo usunięcia
awarii,
2) szczególnych potrzeb pracodawcy.
§ 2. Przepisu § 1 pkt 2 nie stosuje się do pracowników zatrudnionych
na stanowiskach pracy, na których występują przekroczenia najwyższych
dopuszczalnych stężeń lub natężeń czynników szkodliwych dla zdrowia.
§ 21. Nie stanowi pracy w godzinach nadliczbowych czas odpracowania
zwolnienia od pracy, udzielonego pracownikowi, na jego pisemny
wniosek, w celu załatwienia spraw osobistych. Odpracowanie zwolnienia
od pracy nie może naruszać prawa pracownika do odpoczynku, o którym
mowa w art. 132 i 133.

Wynagradzanie za nadgodziny (art. 1511 k.p.)

Za pracę w godzinach nadliczbowych (zgodnie z art. 1511 k.p.) należy
wypłacić, oprócz normalnego wynagrodzenia, dodatki w wysokości:

100% wynagrodzenia – za pracę w godzinach nadliczbowych przypadających:
– w nocy,
– niedziele i święta,
– w dni wolne od pracy poniżej normy dobowej, ponieważ zaliczane są do
średniotygodniowych
– w dni pracy poniżej normy dobowej, ponieważ zaliczane są do
średniotygodniowych
50% wynagrodzenia – za pracę w godzinach nadliczbowych przypadających:
– w dni wolne od pracy, powyżej normy dobowej (z wyłączeniem godzin nocnych),
– w dni pracy powyżej normy dobowej lub przedłużonego dobowego wymiaru
(z wyłączeniem godzin nocnych).

W programie wynagrodzenie za godzinę nadliczbową składa się z 2 elementów:

Wynagrodzenie powyżej normy („wynagrodzenie normalne”) – standardowo
generuje się wraz z wynagrodzeniem zasadniczym (zwiększa jego wartość)
oraz może być generowane w innych elementach np. dodatku funkcyjnym –
pod warunkiem, że w definicji danego typu wypłaty (na zakładce
[Ogólne]) jest zaznaczona opcja Automatycznie korygować wynagrodzenie
z tytułu i odchyłki od normy.

Rys 11. Definicja typu wypłaty – zakładka Ogólne – fragment dotyczący
wyliczenia odchyłek (powyżej/poniżej normy)

Dopłaty do nadgodzin 50% lub 100% – standardowo liczone są tylko od
stawki zaszeregowania. Jeżeli inne elementy mają być ujmowane w tych
dopłatach, to należy w definicji odpowiednich typów wypłat (na
zakładce [Szczegółowe]) zaznaczyć pole Uwzględnij przy dopłatach za
nadgodziny.

Rys 12. Definicja typu wypłaty – zakładka Szczegółowe – fragment
dotyczący uwzględniani dodatku w dopłatach do nadgodzin

W programie istnieje możliwość generowania wynagrodzenia powyżej normy
jako odrębny element wypłaty (nie w wynagrodzeniu zasadniczym). W tym
celu z poziomu: Konfiguracja firmy/ Płace/ Parametry należy zaznaczyć
parametr Wynagrodzenie powyżej/poniżej liczone jako oddzielny element
wypłaty. Dotyczy to tylko wynagrodzenia zasadniczego, nie dodatków.

Dodatkowo można zadecydować, czy oddzielnie wypłacone wynagrodzenie
zasadnicze powyżej/poniżej normy ma być wliczane do podstawy urlopu /
ekwiwalentu – poprzez zaznaczenie parametrów:

Oddzielnie wypłacone ‘powyżej normy’ wliczane do podstawy urlopu /ekwiwalentu
Oddzielnie wypłacone ‘poniżej normy’ wliczane do podstawy urlopu /ekwiwalentu

Rys 13. Konfiguracja / Płace / Parametry – fragment dotyczący
wynagrodzenia powyżej /poniżej normy
Uwaga

Dla pracownika zatrudnionego na stawkę miesięczną bardzo istotne jest
liczenie wynagrodzenia powyżej/poniżej normy jako odrębnego elementu
wypłaty, ponieważ gdy „powyżej normy” jest częścią wynagrodzenia
zasadniczego miesięcznego, to nie jest wliczany do podstawy urlopowej.
Natomiast, gdy jest odrębnym elementem wypłaty, to może być wliczany
do podstawy urlopowej, jako średnia z 3 miesięcy.

Wynagrodzenie powyżej normy może być bilansowane wynagrodzeniem
poniżej normy – w tym celu należy zaznaczyć parametr Bilansowanie
powyżej/poniżej normy (w obrębie strefy czasu pracy).

Bilansowanie wynagrodzenia zasadniczego powyżej/poniżej normy jest
wykonywane w obrębie danej strefy czasu pracy i dotyczy pozycji
generowanych jako odrębne elementy wypłaty, jak i również, gdy są
częścią wynagrodzenia zasadniczego (w danej strefie).

Bilansowanie powyżej i poniżej normy (bez względu na strefy czasu
pracy) dotyczy innych typów wypłat, które w konfiguracji mają
zaznaczone automatyczne korygowanie z tytułu odchyłek od normy.

Nadgodziny dobowe i średniotygodniowe

Nadgodziny dzielimy na:

dobowe, które występują:- w dniach pracy – praca powyżej normy dobowej
(8h) lub przedłużonego dobowego wymiaru (np. 12h) -> płatna jako 50%
lub 100% jeżeli przypadają w nocy
– w dniach wolnych – praca powyżej normy dobowej 8h -> płatna jako 50%
– w dniach świątecznych – praca powyżej normy dobowej 8h -> płatna jako 100%
średniotygodniowe, które występują:
– w dniach pracy – praca powyżej zaplanowanego dobowego wymiaru (np.
6h) do normy dobowej (8h) -> płatna jako 100%
– w dniach wolnych – praca poniżej normy dobowej 8h -> płatna jako 100%
– w dniach świątecznych – praca poniżej normy dobowej 8h -> płatna jako 100%

Uwaga

W przypadku, gdyby pracownik miał zaplanowany wymiar czasu pracy
poniżej 8h, np. 6h (równoważny system czasu pracy), a przepracuje np.
12h, to nadgodziny dobowe występują powyżej normy 8h, czyli w tym
przypadku od 8h do 12h, czyli 4h. Natomiast nadgodziny
średniotygodniowe – od 6h do 8 h, czyli 2h.

Rozliczanie nadgodzin wg norma zgodna z planem pracy

Parametry w konfiguracji

Rozliczanie nadgodzin wg parametru Norma zgodna z planem pracy polega
na porównaniu dla każdego dnia ilości godzin rzeczywiście
przepracowanych z kalendarza (Nie)obecności z ilością godzin z planu
pracy. W tej sytuacji każda godzina przepracowana ponad zaplanowany
wymiar czasu pracy jest traktowana jako nadgodzina.

Rys 14. Definicja kalendarza – ustawienie rozliczania nadgodzin jako
„Norma zgodna z planem pracy”

Dopłaty do nadgodzin (50%, 100%) naliczane wg „norma zgodna z planem
pracy” zależą od parametrów znajdujących się w Konfiguracji firmy/
Płace/ Konfiguracja Kalendarzy – są to Nadgodziny 100% w:

Godziny nocne – zaznaczony (domyślnie)
Niedziele i święta – zaznaczony (domyślnie)
Dni wolne (poniżej normy dobowej) – zaznaczony (domyślnie), dotyczy
pracy np. w sobotę do 8h
Dni wolne (powyżej normy dobowej) – niezaznaczony (domyślnie), dotyczy
pracy np. w sobotę powyżej 8h

Uwaga

Dla dni wolnych od pracy norma dobowa odczytywana jest z formularza
pracownika, zakładka Etat/Zatrudnienie – pole ‘Norma dobowa do urlopu
dla pełnego wymiaru etatu’ (standardowo 8h).

Dni pracy po przekroczeniu dobowego limitu nadgodzin 50% –
niezaznaczony (domyślnie), związany jest z innym parametrem Dobowy
limit nadgodzin 50% w dni pracy (2:00) – zgodnie z archiwalnymi
przepisami dwie pierwsze nadgodziny w dni pracy były płatne jako 50%,
kolejne 100%.

Rys 15. Konfiguracja kalendarzy – nadgodziny 100% wg planu pracy
(wartości domyślne)

Przykłady rozliczenia nadgodzin wg norma zgodna z planem pracy

Poniżej prezentowane są przykłady wyliczenia nadgodzin „wg norma
zgodna z planem pracy” (ustawienie w definicji kalendarza) – przy
standardowych ustawieniach w Konfiguracji kalendarzy, czyli przy
zaznaczonych parametrach dla: Nadgodziny 100%: Godziny nocne,
Niedziele i święta, Dni wolne (poniżej normy dobowej).

Podstawowy system czasu pracy – pełny etat

Przykład

Pracownik zatrudniony na pełen etat w podstawowym systemie czasu
pracy, czyli po 8h dziennie (1-miesięczny okres rozliczeniowy) – w
styczniu 2018 powinien pracować 168h (od poniedziałku do piątku po
8h), a przepracował 184h (praca nie przypadała w porze nocnej). W
jednym tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni
zgodnie z harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:0008:0008:0008:0008:0000:0000:0040h
Rzeczywisty czas pracy08:0012:0008:0008:0008:0010:0002:0056h
Powyżej planu
+4:00


+10:00 +2:00+16h









Porównując czas przepracowany z planem pracy (w systemie dobowym)
wynika, że wystąpiły następujące nadgodziny:
– 50% -> 6h = 4h (wtorek, praca ponad zaplanowany dobowy wymiar) + 2h
(sobota, praca powyżej normy 8h – odczytana z pola „Norma dobowa dla
urlopu” z formularza pracownika)
– 100% -> 10h = 8h (sobota, praca do normy 8h) + 2h (niedziela, praca
do normy 8h)

Suma nadgodzin = 6h (50%) +10h (100%) = 16h
Pracownik będzie miał wypłacane:
– wynagrodzenie powyżej normy za 16h – godziny przepracowane ponad
wymiar czasu pracy (168h)
– dopłaty do nadgodzin 50% za 6h
– dopłaty do nadgodzin 100% za 10h

Podstawowy system czasu pracy – niepełny etat

Przykład

Pracownik zatrudniony na ½ etatu w podstawowym systemie czasu pracy,
czyli po 4h dziennie (1-miesięczny okres rozliczeniowy) – w lutym 2018
powinien pracować 80h (od poniedziałku do piątku po 4h), a
przepracował 101h (praca nie przypadała w porze nocnej). W jednym
tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni zgodnie z
harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy04:0004:0004:0004:0004:0000:0000:0020h
Rzeczywisty czas pracy10:0004:0004:0004:0004:0009:0006:0041h
Powyżej planu+6:00



+9:00 +6:00+21h









Porównując czas przepracowany z planem pracy (w systemie dobowym)
wynika, że wystąpiły następujące nadgodziny:
– 50% -> 7h = 6h (poniedziałek, praca ponad zaplanowany dobowy wymiar)
+ 1h (sobota, praca powyżej normy 8h)
– 100% -> 14h = 8h (sobota, praca do normy 8h) + 6h (niedziela, praca
do normy 8h)

Suma nadgodzin = 7h (50%) +14h (100%) = 21h
Pracownik będzie miał wypłacane:
– wynagrodzenie powyżej normy za 21h – godziny przepracowane ponad
wymiar czasu pracy (88h)
– dopłaty do nadgodzin 50% za 7h
– dopłaty do nadgodzin 100% za 14h

Bilansowanie w rozliczeniu nadgodzin wg norma zgodna z planem pracy

Nadgodziny (praca ponad zaplanowany wymiar) są pomniejszane przez
odnotowane niedogodziny (praca poniżej zaplanowanego dobowego wymiaru)
i nieobecności nieusprawiedliwione (NN) – decyduje o tym parametr
Algorytm bilansowania nadgodzin w rozliczanym okresie (w definicji
kalendarza), dla którego są dostępne następujące opcje:

1. Nie bilansuj – niedogodziny i nieusprawiedliwione nieobecności (NN)
nie pomniejszają nadgodzin,
2. 100%, 50% (domyślnie) – niedogodziny i nieusprawiedliwione
nieobecności (NN) pomniejszają w pierwszej kolejności nadgodziny
wynagradzane dopłatą 100%, a następnie dopłatą 50%,
3. 50%, 100% – analogicznie jak powyżej, tylko odwrotna kolejność pomniejszania.

Przykład

Pracownik zatrudniony na ¾ etatu w podstawowym systemie czasu pracy,
czyli po 6h dziennie (1-miesięczny okres rozliczeniowy) – w lutym 2018
powinien pracować 120h (od poniedziałku do piątku po 6h), a
przepracował 123h (praca nie przypadała w porze nocnej). W jednym
tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni zgodnie z
harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy06:0006:0006:0006:0006:0000:0000:0030h
Rzeczywisty czas pracy08:0003:0006:0006:0006:0004:0000:0033h
Powyżej planu+2:00



+4:00
+6h
Poniżej planu
-3:00




-3h









Porównując czas przepracowany z planem pracy (w systemie dobowym)
wynika, że wystąpiły następujące nadgodziny:
– 50% -> 2h = 2h (poniedziałek, praca ponad zaplanowany dobowy wymiar)
– 100% -> 4h = 4h (sobota, praca do normy 8h)
Suma nadgodzin = 2h (50%) +4h (100%) = 6h

Bilansowanie nadgodzin (o niedogodziny 3h) dla poszczególnych opcji:
1. Nie bilansuj (niedogodziny = 3h)
Nadgodziny 50% = 2h
Nadgodziny 100% = 4h
2. 100%, 50% (niedogodziny = 3h)
Nadgodziny 100% = 4h – 3h = 1h
Nadgodziny 50% = 2h
3. 50%, 100% (niedogodziny = 3h)
Nadgodziny 50% = 2h – 2h = 0h
Nadgodziny 100% = 4h – 1h = 3h
Bez względu na ustawienia opcji bilansowania nadgodzin program naliczy:
– wynagrodzenie powyżej normy za +6h
– wynagrodzenie poniżej normy za -3h
W sytuacji, gdy parametr “Bilansowanie powyżej/poniżej normy (w
obrębie strefy czasu pracy)” w Konfiguracja > Firma > Płace > Parmetry
będzie zaznaczony, to wyliczy się tylko: wynagrodzenie powyżej normy
za +3h (6h – 3h).

Rozliczanie nadgodzin wg normy dobowej i normy średniotygodniowej

Parametry w konfiguracji

W definicji kalendarza (w konfiguracji) możliwe jest określenie norm:

dobowej (standardowo 8h),
średniotygodniowej (standardowo 40h).

Powyższe pola uaktywniają się po wyłączeniu parametru Norma zgodna z
planem pracy.

Rys 16. Definicja kalendarza – ustawienie rozliczania nadgodzin wg
norm: dobowej i średniotygodniowej

W rozliczaniu nadgodzin wg norm (dobowej i średniotygodniowej) istotne
jest przekroczenie w obrębie dnia – normy dobowej (8h) w obrębie
okresu rozliczeniowego – normy średniotygodniowej (40h).
W algorytmie sprawdzania, czy doszło do przekroczenia normy
średniotygodniowej, ważne jest wyliczenie normy do nadgodzin dla
rozliczanego okresu wg poniższego wzoru:

NORMA DO NADGODZIN = liczba pełnych tygodni * norma średniotygodniowa
(standardowo 40h) + liczba dni pracy w niepełnych tygodniach (zakres
od poniedziałku do piątku) * 1/5 z normy średniotygodniowej
(standardowo 8h=40/5) – liczba dni świątecznych w innych dniach niż
niedziela * 1/5 z normy średniotygodniowej (standardowo 8h=40/5)

Dla wyliczenia tej normy istotny jest parametr w definicji kalendarza
Z uwzględnieniem standardowych świąt, jeżeli jest:

Zaznaczony – to norma do nadgodzin jest pomniejszona o standardowe
święta przypadające w innych dniach niż niedziela (zapisane w
programie), niezależnie od tego, czy zostały naniesione w planie
pracy.
Niezaznaczony – to norma do nadgodzin jest pomniejszana tylko o święta
wpisane na planie pracy w innych dniach niż niedziela.

W Konfiguracji firmy/ Płace/ Konfiguracja Kalendarzy dostępne są
parametry dotyczące wyliczenia nadgodzin 100%, standardowe ustawienia
to:

Godziny nocne – 100% (zgodnie z przepisami, bez możliwości modyfikacji)
Niedziele i święta – 100% (zgodnie z przepisami, bez możliwości modyfikacji)
Dni wolne (poniżej normy dobowej) – 100% (zgodnie z przepisami, bez
możliwości modyfikacji), dotyczy pracy np. w sobotę do 8h
Dni wolne (powyżej normy dobowej) – niezaznaczony (domyślnie), dotyczy
pracy np. w sobotę powyżej 8h

Uwaga

Dla dni wolnych od pracy /świątecznych norma dobowa odczytywana jest z
definicji kalendarza (standardowo 8h).

Dni pracy po przekroczeniu dobowego limitu nadgodzin 50% –
niezaznaczony (domyślnie), związany jest z innym parametrem Dobowy
limit nadgodzin 50% w dni pracy (2:00) – dawniej dwie pierwsze
nadgodziny w dni pracy były płatne jako 50%, kolejne 100%.

Rys 17. Konfiguracja kalendarzy – algorytmy rozliczania nadgodzin wg
normy tygodniowej

Wyliczenie nadgodzin wg normy dobowej i średniotygodniowej następuje w
2 krokach:

I krok – wyliczenie nadgodzin dobowych
II krok – wyliczenie nadgodzin średniotygodniowych (sprawdzamy, czy
doszło do przekroczenia normy średniotygodniowej) – w tym celu należy
porównać czas przepracowany pracownika powiększony o liczbę godzin
usprawiedliwionych nieobecności, a pomniejszony o nadgodziny „dobowe”
z obowiązującym wymiarem czasu pracy (normą do nadgodzin).
Poniżej wzór sprawdzający, czy doszło do przekroczenia normy średniotygodniowej:

X = CZAS PRZEPRACOWANY + CZAS USPRAWIEDLIWIONYCH NIEOBECNOŚCI –
NADGODZINY DOBOWE – NORMA DO NADGODZIN
i gdy:
X większe od 0 – to oznacza, że wystąpiły nadgodziny średniotygodniowe,
X mniejsze lub równe 0 – to oznacza, że nie wystąpiły nadgodziny
średniotygodniowe.

Ogólnie nadgodziny dzielimy na:

dobowe, które występują:
– w dniach pracy – praca powyżej normy dobowej (8h) lub przedłużonego
dobowego wymiaru (np. 12h) -> płatna jako 50% lub 100% jeżeli przypada
w nocy
– w dniach wolnych – praca powyżej normy dobowej 8h -> płatna jako 50%
– w dniach świątecznych – praca powyżej normy dobowej 8h -> płatna jako 100%
średniotygodniowe, które występują:
– w dniach pracy – praca powyżej zaplanowanego dobowego wymiaru (np.
6h) do normy dobowej (8h) -> płatna jako 100%
– w dniach wolnych – praca poniżej normy dobowej 8h -> płatna jako 100%
– w dniach świątecznych – praca poniżej normy dobowej 8h -> płatna jako 100%

Uwaga

Praca powyżej 8h jest zaliczana do nadgodzin dobowych, natomiast praca
do 8h jest uwzględniania przy liczeniu nadgodzin wynikających z
przekroczenia normy średniotygodniowej.

Przykłady rozliczenia nadgodzin wg normy dobowej i średniotygodniowej

Poniżej prezentowane są przykłady wyliczenia nadgodzin dla okresu 1
miesięcznego przy ustawieniu norm: dobowej (8h) i średniotygodniowej
(40h) z zaznaczonym parametr Z uwzględnieniem standardowych świąt w
definicji kalendarza – przy standardowych ustawieniach w Konfiguracji
kalendarzy dotyczących 100% dopłat do nadgodzin, czyli:

Dni wolne (powyżej normy dobowej) – niezaznaczone
Dni pracy po przekroczeniu dobowego limitu nadgodzin 50% – niezaznaczone

Podstawowy system czasu pracy (1 miesięczny) – pełny etat

Przykład

Pracownik zatrudniony na pełen etat w podstawowym systemie czasu
pracy, czyli o 8h dziennie (1-miesięczny okres rozliczeniowy) – w
styczniu 2018 powinien przepracować 168h, a przepracował 184h (praca
nie przypadała w porze nocnej). W jednym tygodniu pracował zgodnie z
poniższą tabelką (pozostałe dni zgodnie z harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:0008:0008:0008:0008:0000:0000:0040h
Rzeczywisty czas pracyurlop13:0008:0008:0008:0010:0009:0056h
Powyżej planu
+5:00


+10:00 +9:00+24h









W definicji kalendarza: Norma dobowa = 8h, norma tygodniowa = 40h z
zaznaczonym parametrem Z uwzględnieniem standardowych świąt.

Liczymy nadgodziny dobowe, do których zaliczamy pracę ponad normę dobową (8h):
Nadgodziny dobowe:
– 50% -> 7h = 5h (wtorek, praca ponad normę 8h) + 2h (sobota, praca
ponad normę 8h)
– 100% -> 1h (niedziela, praca ponad normę 8h)
Suma nadgodzin dobowych = 7h (50%) + 1h (100%) = 8h

Liczymy nadgodziny po przekroczeniu normy średniotygodniowej
Norma: 4 pełne tygodnie * 40h + 3 dni brzegowe (29, 30, 31) * 8h – 2
dni świąt * 8h = 160h + 24h – 16h = 168h

Czas przepracowany (184h) + czas usprawiedliwionych nieobecności (8h
urlopu) – nadgodziny dobowe (8h) – norma (168h) = 184 + 8 – 8 – 168 =
16 > 0, czyli doszło do przekroczenia normy średniotygodniowej.

Podsumowanie nadgodzin:
– Dobowe 50% = 7h
– Dobowe 100% = 1h
– Średniotygodniowe 100% = 16h

Gdy parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe będzie:

niezaznaczony – to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 24h
– Dopłata do nadgodzin 50% za 7h
– Dopłata do nadgodzin 100% za 17h
zaznaczony to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 24h
– Dopłata do nadgodzin dobowych 50% za 7h
– Dopłata do nadgodzin dobowych 100% za 1h
– Dopłata do nadgodzin średniotygodn. 100% za 16h


Równoważny system czasu pracy (1 miesięczny) – pełny etat

W równoważnym systemie czasu pracy dopuszczalne jest przedłużenie
dobowego wymiaru ponad 8h, które powinno być rekompensowane dniami
wolnymi od pracy lub skróceniem dobowego wymiaru czasu pracy (poniżej
8h) w niektórych dniach. W takiej sytuacji w definicji kalendarza przy
rozliczeniu nadgodzin wg normy dobowej i średniotygodniowej powinien
być zaznaczony parametr Z uwzględnieniem przedłużonych dobowych
wymiarów z planu pracy (równoważny czas pracy).

Po zaznaczeniu tego parametru, praca w godzinach nadliczbowych
dobowych będzie liczona następująco:

W dniach pracy – program będzie sprawdzał oprócz normy dobowej
określonej w definicji kalendarza (np. 8h) również dobowy wymiar czasu
pracy ustalony w planie pracy (grafiku) pracownika. W dniach
przedłużonego dobowego wymiaru czasu pracy (np. 12h) – nadgodziny
dobowe wystąpią po przekroczeniu tego wymiaru (czyli po 12h).
Natomiast w dniach skróconego dobowego wymiaru czasu pracy (np. 6h) –
nadgodziny dobowe wystąpią po przekroczeniu dobowej normy czasu pracy
określonej w definicji kalendarza, czyli po przekroczeniu 8h.
W dniach wolnych od pracy/ świątecznych – program będzie sprawdzał
tylko normę dobową określoną w definicji kalendarza (np. 8h), czyli
czas pracy po przekroczeniu tej normy będzie zaliczany do nadgodzin
dobowych. Natomiast czas przepracowany w obrębie (do) normy dobowej
będzie uwzględniany w algorytmie sprawdzania przekroczenia normy
średniotygodniowej.

Przykład

Pracownik zatrudniony na pełen etat w równoważnym systemie czasu
pracy, czyli pracuje głównie po 12h w dni: poniedziałki, środy,
piątki, jednak czasem wyznaczane są inne dni – z różną ilością godzin
(1-miesięczny okres rozliczeniowy) – w lutym 2018 wymiar czasu pracy
powinien wynieść 160h.
W tym miesiącu przypadają: 4 poniedziałki, 4 środy, 4 piątki, czli 12
dni * 12h =144h, czyli w celu uzupełnienia planu do 160h wyznaczono
dodatkowo 2 soboty po 8h.
W jednym tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni
zgodnie z harmonogramem). Sumarczynie przepracował 172h.

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy12:0000:00
12:0000:00
12:00
00:00
00:00
36h
Rzeczywisty czas pracy12:00
00:00
14:00

10:0012:00
00:00
00:00
48h
Powyżej planu

+2:00+10:00


+12h









W definicji kalendarza: Norma dobowa = 8h, norma tygodniowa = 40h z
zaznaczonymi parametrami:

Z uwzględnieniem przedłużonych dobowych wymiarów z planu pracy
(równoważny czas pracy)
Z uwzględnieniem standardowych świąt

Liczymy nadgodziny dobowe, do których zaliczamy pracę ponad normę
dobową (8h) lub ponad przedłużony dobowy wymiar czasu pracy (np. 12h)

Nadgodziny dobowe:
– 50% -> 4h = 2h (środa, praca ponad przedłużony wymiar czasu pracy,
czyli 12h) + 2h (czwartek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 4h (50%)

Liczymy nadgodziny po przekroczeniu normy średniotygodniowej
Norma: 4 pełne tygodnie * 40h + 0 dni brzegowe * 8h – 0 dni
świątecznych * 8h = 160h +0h – 0h = 160h

Czas przepracowany (172h) + czas usprawiedliwionych nieobecności (0h
urlopu) – nadgodziny dobowe (4h) – norma (160h) = 172 + 0 – 4 – 160 =
8 > 0, czyli doszło do przekroczenia normy średniotygodniowej (8h –
dopłata do nadgodzin 100%).

Podsumowanie nadgodzin:
– Dobowe 50% = 4h
– Dobowe 100% = 0h
– Średniotygodniowe 100% = 8h

Gdy parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe będzie:

niezaznaczony – to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 12h
– Dopłata do nadgodzin 50% za 4h
– Dopłata do nadgodzin 100% a 8h
zaznaczony to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 12h
– Dopłata do nadgodzin dobowych 50% za 4h
– Dopłata do nadgodzin średniotygodn. 100% za 8h


Podstawowy system czasu pracy (1 miesięczny) – niepełny etat

Dla pracownika zatrudnionego na część etatu pracodawca powinien
ustalić tzw. limit godzin. Wynika to z art. 151 § 5 k.p., który
informuje, że: Strony ustalają w umowie o pracę dopuszczalną liczbę
godzin pracy ponad określony w umowie wymiar czasu pracy pracownika
zatrudnionego w niepełnym wymiarze czasu pracy, których przekroczenie
uprawnia pracownika, oprócz normalnego wynagrodzenia, do dodatku do
wynagrodzenia, o którym mowa w art. 1511 § 1 (dodatku do wynagrodzenia
jak za pracę nadliczbową).

W programie Comarch ERP Optima Płace i Kadry można określić limit
nadgodzin dla niepełnoetatowca tylko poprzez jako wprowadzenie
odpowiedniej normy dobowej i średniotygodniowej (niższej niż dla
pełnego etatu), np. dla osoby zatrudnionej na ½ wymiaru etatu – normę
dobowa 6h, średniotygodniową 30h.

Przykład

Pracownik zatrudniony na ½ etatu w podstawowym systemie czasu pracy,
czyli po 4h dziennie (1-miesięczny okres rozliczeniowy) – w sierpniu
2018 powinien przepracować 88h (1/2*176h), a przepracował 101h (praca
nie przypadała w porze nocnej). W jednym tygodniu pracował zgodnie z
poniższą tabelką (pozostałe dni zgodnie z harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy04:00
04:00
04:00
04:00
04:00
00:0000:0020h
Rzeczywisty czas pracy09:00

06:00


04:00
urlop04:00
10:0000:0033h
Powyżej planu+5:00+2:00


+10:00
+17h









W definicji kalendarza: Norma dobowa = 6h, norma tygodniowa = 30h z
zaznaczonym parametrem Z uwzględnieniem standardowych świąt.

Liczymy nadgodziny dobowe, do których zaliczamy pracę ponad normę dobową (6h).
Nadgodziny dobowe:
– 50% -> 7h = 3h (poniedziałek, praca ponad normę 6h) + 4h (sobota,
praca ponad normę 6h)
– 100% -> 0h
Suma nadgodzin dobowych = 7h (50%)

Liczymy nadgodziny po przekroczeniu normy średniotygodniowej –
Norma: 4 pełne tygodnie * 30h + 3 dni brzegowe (29,30,31) * 6h (1/5 z
normy średniotygodniowej 30h) – 1 święto * 6h = 120h + 18h – 6h = 132h

Czas przepracowany (101h) + czas usprawiedliwionych nieobecności (4h
urlopu) – nadgodziny dobowe (7h) – norma 132h = 101 + 4 – 7 – 132 =
-34<0, czyli nie doszło do przekroczenia normy średniotygodniowej.

Podsumowanie nadgodzin:
– Dobowe 50% = 7h
– Dobowe 100% = 0h
– Średniotygodniowe 100% = 0h

Gdy parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe będzie:

niezaznaczony – to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 17h
– Dopłata do nadgodzin 50% za 7h
zaznaczony to w wypłacie zostanie naliczone:
– Wynagrodzenie powyżej normy za 17h
– Dopłata do nadgodzin dobowych 50% za 7h


Podstawowy system czasu pracy (3 miesięczny) – pełny etat

W module Płace i Kady Plus istnieje możliwość stosowania okresu
rozliczeniowego dłuższego niż 1 miesiąc (np. 3 miesięcznego). W tym
celu w definicji kalendarza w obszarze Rozliczenie w polu: Co – należy
wpisać 3 (miesiące).

Rys 18. Konfiguracja kalendarza – ustawienie okresu rozliczeniowego

Dla okresu rozliczeniowych dłuższych niż 1 miesiąc istotny jest
parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe,
ponieważ gdy parametr jest:

Zaznaczony – to dopłaty do nadgodzin dobowych są naliczane w miesiącu
wystąpienia nadgodzin, natomiast dopłaty do nadgodzin
średniotygodniowych na koniec okresu rozliczeniowego.
Niezaznaczony – to dopłaty do nadgodzin (dobowych i
średniotygodniowych) są naliczane w wypłacie za ostatni miesiąc okresu
rozliczeniowego.

Uwaga

Wynagrodzenie powyżej/poniżej normy (podstawowe wynagrodzenie)
rozliczane jest zawsze w miesiącu wystąpienia nadgodzin/niedogodzin.

Poniżej prezentowane są przykłady wyliczenia nadgodzin dla okresu 3
miesięcznego przy ustawieniu norm: dobowej (8h) i średniotygodniowej
(40h) z zaznaczonymi parametrami:

Z uwzględnieniem standardowych świąt,
Podział dopłat na nadgodziny dobowe i średniotygodniowe.

W Konfiguracji kalendarzy – standardowe ustawienia, czyli:

Dni wolne (powyżej normy dobowej) – niezaznaczone
Dni pracy po przekroczeniu dobowego limitu nadgodzin 50% – niezaznaczone

Przykład

Pracownik zatrudniony na pełen etat w podstawowym systemie czasu
pracy, czyli pracuje po 8h dziennie (3 miesięczny okres
rozliczeniowy). W okresie styczeń – marzec 2018 wymiar czasu pracy
504h (168h+160h+176h), a przepracował 518h (174h+171h+173h), praca nie
przypadała w porze nocnej.

W definicji kalendarza: Norma dobowa = 8h, norma tygodniowa = 40h

Rozliczenie Co: 3 miesiące
Parametry:

Z uwzględnieniem standardowych świąt – zaznaczony
Podział dopłat na nadgodziny dobowe i średniotygodniowe – zaznaczony


W styczniu 2018 (1 miesiąc rozliczeniowy) – wymiar 168h, w jednym
tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni zgodnie z
harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:0000:0040h
Rzeczywisty czas pracyurlop10:0008:00
08:00
08:00
12:0000:0046h
Powyżej planu
+2:00


+12:00
+14h









W styczniu 2018 – wymiar czasu pracy 168h, przepracował 174h –
sprawdzamy tylko nadgodziny dobowe, do których zaliczamy pracę ponad
normę dobową (8h).
Nadgodziny dobowe:
– 50% -> 6h = 2h (wtorek, praca ponad normę 8h) + 4h (sobota, praca
ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 6h (50%)

W wypłacie pracownika zostanie naliczone:
– Wynagrodzenie powyżej normy za 14h
– Dopłata do nadgodzin dobowych 50% za 6h

*****************
W lutym 2018 (2 miesiąc rozliczeniowy) – wymiar 160h, w jednym
tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni zgodnie z
harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:00
00:00
40h
Rzeczywisty czas pracy08:00
08:00
08:00
08:0010:0000:00
09:0051h
Powyżej planu



+2:00
+9:00+11h









W lutym 2018 – wymiar czasu pracy 160h, przepracował 171h – sprawdzamy
tylko nadgodziny dobowe, do których zaliczamy pracę ponad normę dobową
(8h).
Nadgodziny dobowe:
– 50% -> 2h (piątek, praca ponad normę 8h)
– 100% -> 1h (niedziela, praca ponad normę 8h)
Suma nadgodzin dobowych = 2h (50%) + 1h (100%) = 3h

W wypłacie pracownika zostanie naliczone:
– Wynagrodzenie powyżej normy za 11h
– Dopłata do nadgodzin dobowych 50% za 2h
– Dopłata do nadgodzin dobowych 100% za 1h

*****************
W marcu 2018 (3 miesiąc rozliczeniowy, ostatni) – wymiar 176h, w
jednym tygodniu pracował zgodnie z poniższą tabelką (pozostałe dni
zgodnie z harmonogramem):


Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:00

00:00

40h
Rzeczywisty czas pracyurlopurlop08:00
12:00

08:00
09:00

00:00

37h
Powyżej planu


+4:00
+9:00
+13h









W marcu 2018 (ostatni miesiąc rozliczeniowy) – wymiar czasu pracy
176h, przepracował 173h – sprawdzamy nadgodziny dobowe oraz
średniotygodniowe.

Nadgodziny dobowe:
– 50% -> 5h = 4h (czwartek, praca ponad normę 8h) + 1h (sobota, praca
ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 5h (50%)

Nadgodziny średniotygodniowe:
Pomocnicze wyliczenia:
Norma do nadgodzin = 12 pełnych tygodni * 40h + 5 dni brzegowych (26,
27, 28, 29, 30.03) * 8h – 2 dni świątecznych (1 i 6.01) * 8h = 480h +
40h – 16h = 504h
Czas przepracowany = 518h (174h styczeń + 171h luty +173h marzec)
Czas usprawiedliwionych nieobecności (urlop) = 24h (8h styczeń +16h marzec)
Nadgodziny dobowe = 14h (6h styczeń + 3h luty + 5h marzec)

Czas przepracowany (518h) + czas usprawiedliwionych nieobecności (24h
urlopu) – nadgodziny dobowe (14h) – norma (504h) = 518 + 24 – 14 – 504
= 24 > 0, czyli doszło do przekroczenia normy średniotygodniowej.

W wypłacie pracownika zostanie naliczone:
Wynagrodzenie powyżej normy za 13h
– Dopłata do nadgodzin dobowych 50% za 5h
– Dopłata do nadgodzin średniotygodn. 100% za 24h

Gdyby parametr Podział dopłat na nadgodziny dobowe i średniotygodniowe
byłby niezaznaczony, to w wypłatach za okres: styczeń i luty 2018
policzy się tylko wynagrodzenie powyżej normy, a za okres marzec 2018
– wynagrodzenie powyżej normy oraz dopłaty:
– Dopłata do nadgodzin 50% za 13h (6h dobowe w styczniu + 2h dobowe w
lutym +5h dobowe w marcu)
– Dopłata do nadgodzin 100% za 25h (1h dobowe w lutym + 24h średniotyg.)

Bilansowanie w rozliczeniu nadgodzin wg normy dobowej i średniotygodniowej

Przy rozliczaniu nadgodzin wg norm: dobowej i średniotygodniowej –
Algorytm bilansowania nadgodzin w rozliczanym okresie zależy od
parametru Podział dopłat na nadgodziny dobowe i średniotygodniowe.

1. Gdy Podział dopłat na nadgodziny dobowe i średniotygodniowe jest
niezaznaczony – to do wyboru mamy opcje:

Nie bilansuj – nadgodziny dobowe nie są pomniejszane o niedogodziny i
nieobecności nieusprawiedliwione (NN). Natomiast nadgodziny
średniotygodniowe są pomniejszane, ponieważ przy sprawdzaniu, czy
doszło do przekroczenia normy średniotygodniowej uwzględniamy czas
przepracowany, który jest pomniejszony o czas niedogodzin – wg wzoru:
X = CZAS PRZEPRACOWANY + CZAS USPRAWIEDLIWIONYCH NIEOBECNOŚCI –
NADGODZINY DOBOWE – NORMA
i gdy:
X>0 – to oznacza, że wystąpiły nadgodziny średniotygodniowe,
X<=0 – to oznacza, że nie wystąpiły nadgodziny średniotygodniowe
100%, 50% – najpierw liczone są nadgodziny dobowe i średniotygodniowe
(bez pomniejszenia o niedogodziny), a następnie wyliczone ilość
nadgodzin (50%, 100%) jest bilansowana – w pierwszej kolejności
nadgodziny 100%, a potem 50%.
X = CZAS PRZEPRACOWANY + CZAS NIEDOGODZIN + CZAS USPRAWIEDLIWIONYCH
NIEOBECNOŚCI – NADGODZINY DOBOWE – NORMA
i gdy:
X>0 – to oznacza, że wystąpiły nadgodziny średniotygodniowe,
X<=0 – to oznacza, że nie wystąpiły nadgodziny średniotygodniowe.
50%, 100% – analogicznie j.w., tylko odwrotna jest kolejność
pomniejszania o niedogodziny, najpierw nadgodziny 50%, potem 100%.


2. Gdy Podział dopłat na nadgodziny dobowe i średniotygodniowe jest
zaznaczony – to dostępne są opcje:

Tylko średniotygodniowe – nadgodziny dobowe nie są pomniejszane.
Natomiast nadgodziny średniotygodniowe są pomniejszane, ponieważ przy
sprawdzaniu, czy doszło do przekroczenia normy średniotygodniowej
uwzględniamy czas przepracowany, który jest pomniejszony o czas
niedogodzin – wg wzoru:
X = CZAS PRZEPRACOWANY + CZAS USPRAWIEDLIWIONYCH NIEOBECNOŚCI –
NADGODZINY DOBOWE – NORMA
i gdy:
X>0 – to oznacza, że wystąpiły nadgodziny średniotygodniowe,
X<=0 – to oznacza, że nie wystąpiły nadgodziny średniotygodniowe
Średniotygodniowe, dobowe 100%, 50% – w pierwszej kolejności
pomniejszane są nadgodziny średniotygodniowe na koniec okresu
rozliczeniowego pod warunkiem, że ich ilość jest wystarczająca do
zbilansowania wszystkich niedogodzin z całego okresu rozliczeniowego.
W przypadku, gdy ilość nadgodzin średniotygodniowych od początku
okresu rozliczeniowego nie jest wystarczająca, to występujące
niedogodziny na bieżąco będą pomniejszać nadgodziny dobowe – w
pierwszej kolejności 100%, potem 50%. Nieobecności nieusprawiedliwione
nigdy nie pomniejszają nadgodzin dobowych, tylko średniotygodniowe.
Średniotygodniowe, dobowe 50%, 100% – działanie opisane jak wyżej,
tylko kolejność pomniejszania nadgodzin dobowych jest najpierw 50%,
potem 100%.

Przykład bilansowania przy podziale na nadgodziny dobowe i
średniotygodniowe (okres 1 miesięczny)

Przykład

Pracownik zatrudniony na pełen etat w podstawowym systemie czasu pracy
(1-miesięczny okres rozliczeniowy) – w lutym 2018 powinien zgodnie z
harmonogramem przepracować 160h, przepracował 153h. W jednym tygodniu
pracował zgodnie z poniższą tabelką (pozostałe dni zgodnie
z harmonogramem):

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:00
00:00
40h
Rzeczywisty czas pracyurlop10:00
08:00
06:00
06:00
03:00
00:0033h
Powyżej planu
+2:00


+3:00
+5h
Poniżej planu


-2:00-2:00

-4h









W definicji kalendarza: Norma dobowa = 8h, norma tygodniowa = 40h

Rozliczenie Co: 1 miesiąc
Parametry:

Z uwzględnieniem standardowych świąt – zaznaczony
Podział dopłat na nadgodziny dobowe i średniotygodniowe – zaznaczony

1. Wyliczenie nadgodzin z bilansowaniem: Tylko średniotygodniowe –
przy tym ustawieniu nadgodziny dobowe nie są pomniejszane, tylko
nadgodziny średniotygodniowe są pomniejszane o niedogodziny i
nieobecności nieusprawiedliwione (NN).

Liczymy nadgodziny dobowe:
– 50% -> 2h (wtorek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 2h (50%) – nie są bilansowane

Liczymy nadgodziny średniotygodniowe:
Czas przepracowany = 153h
Czas usprawiedliwionych nieobecności = 8h
Nadgodziny dobowe = 2h (50%)
Norma do nadgodzin: 4 pełne tygodnie * 40h + 0 dni brzegowe * 8h – 0
dni świątecznych * 8h = 160h + 0h – 0h = 160h

Czas przepracowany (153h) + czas usprawiedliwionych nieobecności (8h
urlopu) – nadgodziny dobowe (2h) – norma (160h) = 153 + 8 – 2 – 160 =
-1 <0, czyli nie doszło do przekroczenia normy średniotygodniowej.

W wypłacie pracownika zostanie naliczone:
– Wynagrodzenie powyżej normy za +5h
– Wynagrodzenie poniżej normy za -4h
W sytuacji, gdy parametr “Bilansowanie powyżej/poniżej normy (w
obrębie strefy czasu pracy)” – w Konfiguracja > Firma > Płace >
Parmetry – będzie zaznaczony, to wyliczy się tylko: wynagrodzenie
powyżej normy za 1h (5h – 4h).
– Dopłata do nadgodzin dobowych 50% za 2h

2. Wyliczenie nadgodzin z bilansowaniem: Średniotygodniowe, dobowe
100%, 50% – w pierwszej kolejności pomniejszane są nadgodziny
średniotygodniowe pod warunkiem, że ich ilość jest wystarczająca do
zbilansowania wszystkich niedogodzin. W przypadku, gdy ilość nadgodzin
średniotygodniowych od początku okresu rozliczeniowego nie jest
wystarczająca, to występujące niedogodziny na bieżąco będą pomniejszać
nadgodziny dobowe – w pierwszej kolejności 100%, potem 50%.
Nieobecności nieusprawiedliwione nigdy nie bilansują nadgodzin
dobowych, tylko średniotygodniowe.

Liczymy nadgodziny dobowe:
– 50% -> 2h (wtorek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 2h (50%)

Liczymy nadgodziny średniotygodniowe bez uwzględnienia niedogodzin i
NN, a następnie wyliczona ilość nadgodzin będzie pomniejszena o czas
niegodzin.

Czas przepracowany = 153h
Czas niedogodzin = 4h
Czas usprawiedliwionych nieobecności = 8h
Nadgodziny dobowe 50% = 2h
Norma do nadgodzin: 4 pełne tygodnie * 40h + 0 dni brzegowe * 8h – 0
dni świątecznych * 8h = 160h + 0h – 0h = 160h

Czas przepracowany (153h) + czas niedgodzin (4h) + czas
usprawiedliwionych nieobecności (8h) – nadgodziny dobowe (2h) – norma
do nadgodzin (160h) = 153 + 4 + 8 – 2 – 160 = 3 >0, czyli doszło do
przekroczenia normy średniotygodniowej o 3h.

Następnie następuje bilansowanie o niedogodziny (4h) w kolejności:
Nadgodziny średniotygodniowe = 3h – 3h niedogodziny = 0h
Nadgodziny dobowe 50% = 2h – 1h niedogodzina = 1h

W wypłacie zostaną naliczone elementy:
– Wynagrodzenie powyżej normy za +5h
– Wynagrodzenie poniżej normy za -4h
W sytuacji, gdy parametr “Bilansowanie powyżej/poniżej normy (w
obrębie strefy czasu pracy)” – w Konfiguracja > Firma > Płace >
Parmetry – będzie zaznaczony, to wyliczy się tylko: wynagrodzenie
powyżej normy za 1h (5h – 4h).
– Dopłata do nadgodzin dobowych 50% za 1h
– Dopłata do nadgodzin średniotygodn. 100% za 0h (po zapisie wypłaty
ten zerowy element zostanie usunięty).

3. Wyliczenie nadgodzin z bilansowaniem: Średniotygodniowe, dobowe
50%, 100% – bilansowanie jak powyżej, tylko nadgodziny dobowe
pomniejszane w kolejności 50%, a następnie 100%.

W tym przypadku wyliczenia będą takie same jak dla opcji bilansowania
Średniotygodniowe, dobowe 100%, 50%, ponieważ nie wystąpiły nadgodziny
dobowe 100%.

Przykład bilansowania przy podziale na nadgodziny dobowe i
średniotygodniowe (okres 3 miesięczny)

Przykład

Pracownik zatrudniony na pełen etat w podstawowym systemie czasu
pracy, czyli pracuje po 8h dziennie (3 miesięczny okres
rozliczeniowy). W okresie styczeń – marzec 2018 wymiar czasu pracy
wynosi 504h (168h+ 160h+176h), a przepracował 505h (163h+161h+181h),
praca nie przypadała w porze nocnej.

W definicji kalendarza: Norma dobowa = 8h, norma tygodniowa = 40h
Rozliczenie Co: 3 miesiące
Parametry:

Z uwzględnieniem standardowych świąt – zaznaczony
Podział dopłat na nadgodziny dobowe i średniotygodniowe – zaznaczony

W styczniu 2018 (1 miesiąc rozliczeniowy) – wymiar 168h. W jednym
tygodniu pracownik pracował zgodnie z poniższą tabelką (pozostałe dni
zgodnie z harmonogramem), przepracował 163h.

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:00
08:00
40h
Rzeczywisty czas pracyurlop09:00
08:00
08:00
06:00
04:00
08:00
43h
Powyżej planu
+1:00


+4:00
+5h
Poniżej planu



-2:00

-2h









W lutym 2018 (2 miesiąc rozliczeniowy) – wymiar 160h. W jednym
tygodniu pracownik pracował zgodnie z poniższą tabelką (pozostałe dni
zgodnie z harmonogramem), przepracował 161h.

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:00
00:00
40h
Rzeczywisty czas pracy08:00
08:00
08:00
12:00
05:00
00:00
00:00
41h
Powyżej planu


+4:00


+4h
Poniżej planu



-3:00

-3h









W marcu 2018 (3 miesiąc rozliczeniowy, ostatni) – wymiar 176h. W
jednym tygodniu pracownik pracował zgodnie z poniższą tabelką
(pozostałe dni zgodnie z harmonogramem), przepracował 181h.

 Pon.Wt.Śr.Czw.Piąt.Sob.Niedz.Suma
Plan pracy08:00
08:00
08:00
08:00
08:00
00:0000:0040h
Rzeczywisty czas pracy08:00
08:00
08:00
10:00
07:00
00:0004:00
45h
Powyżej planu


+2:00

+4:00+6h
Poniżej planu



-1:00

-1h









1. Wyliczenie nadgodzin z bilansowaniem: Tylko średniotygodniowe –
przy tym ustawieniu nadgodziny dobowe nie są pomniejszane, tylko
nadgodziny średniotygodniowe są pomniejszane o niedogodziny i
nieobecności nieusprawiedliwione (NN).

Styczeń 2018 (pierwszym miesiąc rozliczeniowy) – liczymy tylko
nadgodziny dobowe, które nie pomniejszamy.

Liczymy nadgodziny dobowe:
– 50% -> 1h (wtorek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 1h (50%)

W wypłacie zostanie naliczona dopłata do nadgodzin dobowych 50% za 1h.

Luty 2018 (drugi miesiąc rozliczeniowy) – liczymy tylko nadgodziny
dobowe, które nie pomniejszamy.

Liczymy nadgodziny dobowe
– 50% -> 4h (czwartek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 4h (50%)

W wypłacie zostanie naliczona dopłata do nadgodzin dobowych 50% za 4h.

Marzec 2018 (trzeci miesiąc rozliczeniowy, ostatni) – liczymy najpierw
nadgodziny dobowe, które nie pomniejszamy, a następnie nadgodziny
średniotygodniowe, które są pomniejszane o niedogodziny i nieobecności
nieusprawiedliwione (NN).

Liczymy nadgodziny dobowe
– 50% -> 2h (czwartek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 2h (50%)

Liczymy nadgodziny średniotygodniowe:

Czas przepracowany = 505h (163h styczeń + 161h luty +181h marzec)
Czas usprawiedliwionych nieobecności = 8h (styczeń)
Nadgodziny dobowe (z całego okresu rozliczeniowego) = 7h (1h styczeń +
4h luty + 2h marzec)
Norma do nadgodzin =12 pełnych tygodni * 40h + 5 dni brzegowych (26,
27, 28, 29, 30.03) * 8h – 2 dni świąteczne (1 i 6.01) * 8h = 480h +
40h – 16h = 504h

Czas przepracowany (505h) + czas usprawiedliwionych nieobecności (8h
urlopu) – nadgodziny dobowe (7h) – norma (504h) = 505 + 8 – 7 – 504 =
2 > 0, czyli doszło do przekroczenia normy średniotygodniowej.

W wypłacie zostaną naliczone:
– Dopłata do nadgodzin dobowych 50% za 2h
– Dopłata do nadgodzin średniotygodn. 100% za 2h

2. Wyliczenie nadgodzin z bilansowaniem: Średniotygodniowe, dobowe
100%, 50% – w pierwszej kolejności pomniejszane są nadgodziny
średniotygodniowe pod warunkiem, że ich ilość jest wystarczająca do
zbilansowania wszystkich niedogodzin. W przypadku, gdy ilość nadgodzin
średniotygodniowych od początku okresu rozliczeniowego nie jest
wystarczająca, to występujące niedogodziny na bieżąco będą pomniejszać
nadgodziny dobowe – w pierwszej kolejności 100%, potem 50%.
Nieobecności nieusprawiedliwione nigdy nie bilansują nadgodzin
dobowych, tylko średniotygodniowe.

Styczeń 2018 (pierwszym miesiąc rozliczeniowy)

Liczymy nadgodziny dobowe:
– 50% -> 1h (wtorek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 1h (50%)

Liczymy “potencjalne” nadgodziny średniotygodniowe od poczatku okresu
rozliczeniowego, czyli za 1 mc (1.2018) bez uwzględnienia niedogodzin
i NN, więc czas przepracowny jest powiększony o czas niedogodzin i NN.

Czas przepracowany = 163h
Czas niedogodzin i NN= 2h
Czas usprawiedliwionych nieobecności = 8h
Nadgodziny dobowe z bieżącego miesiaca = 2h (50%)
Norma do nadgodzin =4 pełne tygodni * 40h + 3 dni brzegowe (29, 30,
31.01) * 8h – 2 dni świąteczne (1 i 6.01) * 8h = 160h + 24h – 16h =
168h

Czas przepracowany (163h) + czas niedogodzin i NN (2h) + czas
usprawiedliwionych nieobecności (8h urlopu) – nadgodziny dobowe z
bieżącego mc (1h) – norma (168h) = 163 + 2 + 8 – 1 – 168 = 4 > 0,
czyli ilość “potencjalnych” nadgodzin średniotygodnioych wynosi 4h.

Sprawdzamy, czy ilość “potencjalnych” nadgodzin średniotygodniowych od
początku okresu rozliczeniowego jest wystarczająca na zbilansowanie
wszystkich niedogodzin i w przypadku, gdy:
– ilość nagodzin średniotygodniowych jest większa lub równa ilości
niedogodziny, to nadgodziny dobowe nie są pomniejszane.
– W przeciwnym przypadku, gdy ilość nagodzin średniotygodniowych jest
mniejsza niż ilości niedogodziny, to nadgodziny dobowe z bieżacego
miesiąca są pomniejszane.

W tym przypadku ilość “potencjalnych” nadgodzin średniotygodniowych
(4h) jest większa niż niedogodzin (2h), więc nadgodziny dobowe z
bieżącego miesiąca nie są pomniejszane.

W wypłacie zostanie naliczona dopłata do nadgodzin dobowych 50% za 1h.

Luty 2018 (drugi miesiąc rozliczeniowy)

Liczymy nadgodziny dobowe:
– 50% -> 4h (czwartek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 4h (50%)

Liczymy “potencjalne” nadgodziny średniotygodniowe od poczatku okresu
rozliczeniowego, czyli za 2 mc (1-2.2018) bez uwzględnienia
niedogodzin i NN, więc czas przepracowny jest powiększony o czas
niedogodzin i NN.

Czas przepracowany = 324h (163h styczeń + 161h luty)
Czas niedogodzin i NN= 5h (2h styczeń + 3h luty)
Czas usprawiedliwionych nieobecności = 8h (styczeń)
Nadgodziny dobowe wypłacone = 1h
Nadgodziny dobowe z bieżącego miesiaca = 4h (50%)
Norma do nadgodzin = 8 pełnych tygodni * 40h + 3 dni brzegowe (26, 27,
28.02) * 8h – 2 dni świąteczne (1 i 6.01) * 8h = 320h + 24h – 16h =
328h

Czas przepracowany (324h) + czas niedogodzin i NN (5h) + czas
usprawiedliwionych nieobecności (8h urlopu) – nadgodziny dobowe
wypłacone (1h) – nadgodziny z bieżącego mc (4h) – norma (328h) = 324 +
5 + 8 – 1 – 4 – 328 = 4 > 0, czyli ilość “potencjalnych” nadgodzin
średniotygodnioych wynosi 4h.

Sprawdzamy, czy ilość “potencjalnych” nadgodzin średniotygodniowych od
początku okresu jest wystarczająca na zbilansowanie wszystkich
niedogodzin od początku okresu.

W tym przypadku ilość “potencjalnych” nadgodzin średniotygodniowych
(4h) jest mniejsza niż wszystkich niedogodzin (5h), więc nadgodziny
dobowe z bieżacego miesiąca są pomniejszane o brakującą ilość
nadgodzin średniotygodniowych zgodnie z wyliczeniem:
Potencjalne nadgodziny średniotygodniowe (4h) – niedogodziny (5h) = –
1h – o tyle należy pomniejszyć nadgodziny dobowe z bieżącego miesiąca.

Nadgodziny dobowe z bieżacego miesiaca = 4h (50%) – 1h (niedogodzina) = 3h.

W wypłacie zostanie naliczona dopłata do nadgodzin dobowych 50% za 3h.

Marzec 2018 (trzeci miesiąc rozliczeniowy, ostatni)

Liczymy nadgodziny dobowe:
– 50% -> 2h (czwartek, praca ponad normę 8h)
– 100% -> 0h
Suma nadgodzin dobowych = 2h (50%)

Liczymy “potencjalne” nadgodziny średniotygodniowe od poczatku okresu
rozliczeniowego, czyli za 3 mc (1-3.2018) bez uwzględnienia
niedogodzin i NN, więc czas przepracowny jest powiększony o czas
niedogodzin i NN.

Czas przepracowany = 505h (163h styczeń + 161h luty +181h marzec)
Czas niedogodzin i NN= 6h (2h styczeń + 3h luty + 1h marzec)
Czas usprawiedliwionych nieobecności = 8h (styczeń)
Nadgodziny dobowe wypłacone = 4h (1h styczeń + 3h luty)
Nadgodziny dobowe z bieżącego miesiaca = 2h (50%)
Norma do nadgodzin =12 pełnych tygodni * 40h + 5 dni brzegowych (27,
28, 29, 30, 31.03) * 8h – 2 dni świąteczne (1 i 6.01) * 8h = 480h +
40h – 16h = 504h

Czas przepracowany (505h) + czas niedogodzin i NN (6h + czas
usprawiedliwionych nieobecności (8h urlopu)) – nadgodziny dobowe
wypłacone (4h) – nadgodziny dobowe z bieżącego mc (2h) – norma (504h)
= 505 + 6 + 8 – 4 – 2 – 504 = 9 > 0, czyli ilość “potencjalnych”
nadgodzin średniotygodnioych wynosi 9h.

Sprawdzamy, czy ilość “potencjalnych” nadgodzin średniotygodniowych od
początku okresu jest wystarczająca na zbilansowanie wszystkich
niedogodzin od początku okresu.

W tym przypadku ilość “potencjalnych” nadgodzin średniotygodniowych
(9h) jest większa niż wszystkich niedogodzin (6h), więc nadgodziny
dobowe z bieżącego miesiąca nie są pomniejszane.

Nadgodziny dobowe z bieżacego miesiaca = 2h (50%)

Na koniec wyliczamy ostateczną ilość nadgodzin średniotygodniowych od
poczatku okresu rozliczeniowego, czyli za 3 mc (1-3.2018).

Czas przepracowany = 505h (163h styczeń + 161h luty +181h marzec)
Czas usprawiedliwionych nieobecności = 8h (styczeń)
Nadgodziny dobowe wypłacone = 4h (1h styczeń + 3h luty)
Nadgodziny dobowe z bieżącego miesiaca = 2h (50%)
Norma do nadgodzin =12 pełnych tygodni * 40h + 5 dni brzegowych (27,
28, 29, 30, 31.03) * 8h – 2 dni świąteczne (1 i 6.01) * 8h = 480h +
40h – 16h = 504h

Czas przepracowany (505h) + czas usprawiedliwionych nieobecności (8h
urlopu) – nadgodziny dobowe wypłacone (4h) – nadgodziny dobowe z
bieżącego mc (2h) – norma (504h) = 505 + 8 – 4 – 2 – 504 = 3 > 0,
czyli doszło do przekroczenia normy średniotygodniowej.

W wypłacie zostaną naliczone elementy:
Dopłata do nadgodzin dobowych 50% za 2h
Dopłata do nadgodzin średniotygodn. 100% za 3h

3. Wyliczenie nadgodzin z bilansowaniem: Średniotygodniowe, dobowe
50%, 100% – bilansowanie jest jak powyżej, tylko najpierw dobowe 50%,
a następnie 100%.

10 Czas wolny za nadgodziny – Płace i Kadry Plus

Rekompensata za pracę w nadgodzinach – czasem wolnym

Praca w godzinach nadliczbowych może być rekompensowana czasem wolnym
(art. 1512 k.p.). Udzielenie czasu wolnego za pracę w nadgodzinach
zwalnia pracodawcę z obowiązku wypłaty dodatkowego wynagrodzenia za te
nadgodziny.

Udzielenie dnia wolnego w zamian za pracę w dniu wolnym oraz w
niedzielę lub święto (do 8h) jest obowiązkiem pracodawcy. Jeżeli w
trakcie trwania okresu rozliczeniowego nie jest to możliwe, wówczas
należy wypłacić stosowne dodatki. Natomiast za pracę ponad
normę/wymiar dobowy (powyżej 8h) w pierwszej kolejności należy się
wypłata stosownych dodatków. Jednak tu też dopuszczalne jest
odstępstwo od tej reguły i można takie nadgodziny wynagrodzić czasem
wolnym.

Ilość czasu wolnego za nadgodziny

Ilość udzielanego czasu wolnego za pracę nadliczbową zależy od tego,
za jakie nadgodziny (dobowe, czy średniotygodniowe) jest przyznawany
oraz na czyj wniosek (pracownika, czy pracodawcy).
Poniżej znajduje się informacja, ile przysługuje czasu wolnego za
dodatkowo przepracowane godziny – zależnie od rodzaju nadgodzin i na
czyj wniosek:

w dni pracy po przekroczeniu wymiaru dobowego (nadgodziny dobowe)
– na wniosek pracownika: za każdą nadgodzinę – 1 godzina czasu wolnego,
– na wniosek pracodawcy: za każdą nadgodzinę – 1,5 godziny czasu wolnego.
w dni wolne, w niedziele i święta po przekroczeniu normy dobowej
(nadgodziny dobowe)
– na wniosek pracownika: za każdą nadgodzinę – 1 godzina czasu wolnego,
– na wniosek pracodawcy: za każdą nadgodzinę – 1,5 godziny czasu wolnego.
w dni wolne, w niedziele i święta w granicach normy dobowej
(nadgodziny średniotygodniowe)
– bez względu na ilość przepracowanych godzin – 1 dzień wolny.

Czas wolny za nadgodziny w programie

W module Płacy i Kadry Plus udostępniona jest funkcjonalność
odbierania nadgodzin. W kalendarzu czasu pracy pracownika, na danym
wejściu w dniu znajduje się pole Odbiór nadgodzin z rozwijaną listą
znaczników:

O.BM – nadgodziny do odbioru w bieżącym miesiącu (do strefy
niewliczanej do czasu pracy)
O.NM – nadgodziny do odbioru w kolejnym miesiącu (do strefy wliczanej
do czasu pracy)
W.PŁ – wolne za nadgodziny – płatne (do strefy wliczanej do czasu pracy)
W.NP – wolne za nadgodziny – niepłatne (do strefy niewliczanej do czasu pracy)

Rys 19. Formularz wejścia na dniu pracy pracownika – odnotowanie
nadgodzin do odbioru w bieżącym miesiącu

Sposób wynagradzania i wliczania do czasu pracy będzie odczytywany ze
strefy, którą opisuje dany znacznik. Należy pamiętać, że opisy ‘O.NM’
i ‘W.PŁ’ mogą być uwzględniane wyłącznie dla wejść odnotowanych jako
strefy wliczane do czasu pracy, a dwa pozostałe opisy ‘O.BM’ i ‘W.NP’
jako strefy niewliczanej do czasu pracy. Nieprawidłowe dopasowanie
strefy i znacznika przy zapisie jest sygnalizowane komunikatem Wybrano
niewłaściwy opis odbioru nadgodzin, niezgodny z wybraną strefą.

Poniższa tabelka prezentuje powiązanie znaczników z odpowiednimi
strefami czasu pracy. Można używać standardowych stref w programie
(czas pracy podstawowej – wliczana do czasu pracy, czas przerwy –
niewliczana do czasu pracy) lub zdefiniować własne na wzór
standardowych.

ZnacznikRodzaj strefy czasu pracy – wliczanie do czasu przepracowanego
oraz wynagradzanieWliczać do czasu pracy służącego do wyliczania
nadgodzin
O.BMniewliczana do czasu pracy, np. Czas przerwy bez wynagrodzeniaNie
O.NMwliczana do czasu pracy, np. Czas pracy podstawowy wynagradzana 100%Nie
W.PŁwliczana do czasu pracy, np. Czas pracy podstawowy wynagradzana 100%Tak
W.NPniewliczana do czasu pracy, np. Czas przerwy bez wynagrodzeniaTak
Rys 20. Konfiguracja znaczników (nadgodzin do odbioru i czasu wolnego
za nadgodziny) i stref czasu pracy
Uwaga

Sposób wyliczenia czasu przepracowanego jest różny od wyliczeń czasu
wykorzystywanego przy obliczaniu ilości nadgodzin. Do czasu
przepracowanego wliczany jest czas oznaczony O.NM i W.PŁ. Natomiast do
czasu uwzględnianego do obliczeń nadgodzin wliczany jest czas
oznaczony W.PŁ i W.NP.

Wynagrodzenie za czas wolny (udzielony za nadgodziny)

Przy udzielaniu czasu wolnego bardzo ważne jest również, w jakim
miesiącu ten czas wolny jest udzielany, tzn.: czy w tym samym
miesiącu, w którym wystąpiły nadgodziny, czy w kolejnym miesiącu (do
końca okresu rozliczeniowego) oraz na czyj wniosek:
pracownika/pracodawcy.

Udzielony czas wolny w tym samym miesiącu (co nadgodziny)
charakteryzuje się tym, że pracownik ma prawo do normalnego
wynagrodzenia za wszystkie godziny/dni wolne. Niepłatne są natomiast
dodatkowo przepracowane nadgodziny, za które udzielono czasu wolnego,
co prezentuje poniższa tabelka.

Udzielenie czasu wolnego za nadgodziny w tym samym miesiącu
Rodzaj godzin pracyMiesiąc wystąpienia nadgodzin
(np. 1.2017)
Miesiąc odbioru nadgodzin (np.1.2017)
- czas wolny za nadgodziny na wniosek:



pracownikapracodawcy
w dniu pracy
ponad wymiar dobowy
Ilość godzin: 1h
Oznaczenie:
O.BM (przerwa)
Rozliczenie: Brak
Ilość godzin: 1h
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak
Ilość godzin: 1,5h
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak
w dni wolne, niedziele i święta
(powyżej normy dobowej 8h)
Ilość godzin: 1h
Oznaczenie:
O.BM (przerwa)
Rozliczenie: Brak
Ilość godzin: 1hIlość godzin: 1,5h
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak
w dni wolne, niedziele i święta
(do normy dobowej 8h)
Ilość godzin: od 1h do 8h
Oznaczenie:
O.BM (przerwa)
Rozliczenie: Brak
Ilość godzin: 8h (cały dzień)
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak

Rys 21. Czas wolny za nadgodziny w jednomiesięcznym okresie rozliczeniowym

Udzielony czas wolny w innym miesiącu (niż nadgodziny) – przy dłuższym
okresie rozliczeniowym czasu pracy – charakteryzuje się tym, że
dodatkowo przepracowane nadgodziny są wynagradzane stawką zasadniczą w
bieżącym miesiącu. W kolejnym miesiącu płatny jest tylko czas wolny
udzielony za nadgodziny dobowe (ponad normę/wymiar) na wniosek
pracodawcy (art. 1512 § 2 k.p.).

Udzielenie czasu wolnego za nadgodziny w kolejnym miesiącu
Rodzaj godzin pracyMiesiąc wystąpienia nadgodzin
(np. 1.2017)
Miesiąc odbioru nadgodzin (np.2.2017)
- czas wolny za nadgodziny na wniosek:



pracownikapracodawcy
w dniu pracy
ponad wymiar dobowy
Ilość godzin: 1h
Oznaczenie:
O.NM (praca podst.)
Rozliczenie:
Wynagr.powyżej normy (za 1h)

Ilość godzin: 1h 1)
Oznaczenie:
W.NP (przerwa)
Rozliczenie: Wynagr.poniżej normy (za 1h)

Ilość godzin: 1,5h
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak

w dni wolne, niedziele i święta
(powyżej normy dobowej 8h)
Ilość godzin: 1h
Oznaczenie:
O.NM (praca podst.)
Rozliczenie:
Wynagr.powyżej normy (za 1h)

Ilość godzin: 1h 1)
Oznaczenie:
W.NP (przerwa)
Rozliczenie: Wynagr.poniżej normy (za 1h)
Ilość godzin: 1,5h
Oznaczenie:
W.PŁ (praca podst.)
Rozliczenie: Brak

w dni wolne, niedziele i święta
(do normy dobowej 8h)

Ilość godzin: od 1h do 8h
Oznaczenie:
O.NM (praca podst.)
Rozliczenie:
Wynagr.powyżej normy
(za 1 -8h)
Ilość godzin: 8h (cały dzień) 2)
Oznaczenie:
W.NP (przerwa)
Rozliczenie:
Wynagr.poniżej normy (za 8h)


Rys 22. Czas wolny za nadgodziny dla wielomiesięcznych okresów rozliczeniowych
1) Zgodnie z wykładnią prawa, pracownik nie nabywa prawa do
wynagrodzenia za czas wolny udzielany w zamian za pracę w
nadgodzinach, czyli udzielnie czasu wolnego w kolejnym miesiącu
powoduje dysproporcję jego wynagradzania (w poszczególnych miesiącach
okresu rozliczeniowego). W tej kwestii stanowisko zajął Sąd Najwyższy,
który w wyroku z dnia 9 lutego 2010 r. (sygn. akt I PK 157/09)
stwierdził, że wypłata normalnego wynagrodzenia za pracę w
nadgodzinach rekompensowanych udzieleniem pracownikowi na jego wniosek
czasu wolnego powinna nastąpić w okresie odbierania czasu wolnego. (W
tej sytuacji w programie czas nadgodziny można oznaczyć tak jak odbiór
w bieżącym miesiącu, czyli nadgodziny jako niepłatne (O.BM, czas
przerwy) a czas wolny jako płatny (W.PŁ, praca podst.).
2) Gdy za 1 nadgodzinę w dniu wolnym (niedzielę / święto) udzielmy w
kolejnym miesiącu dnia wolnego (8h) i oznaczymy jako niepłatne (jak
mówią przepisy), to pracownik będzie stratny, będzie miał
pomniejszenie wynagrodzenia za 8h. Działając na korzyść pracownika
można oznaczyć dzień wolny jako płatny (W.PŁ, praca podst.) a
nadgodziny jako niepłatne (O.BM, przerwa).

W programie z poziomu okna Listy pracowników dostępny jest wydruk
„Pracownicy z czasem wolny za nadgodziny” (z menu wydruków:
Pracownicy). Dodatkowo z poziomu formularza pracownika również
dostępny jest wydruk „Czas wolny za nadgodziny” (z menu wydruków:
Raporty). Wydruki te przedstawiają dane na temat udzielonego czasu
wolnego za wypracowane nadgodziny oraz czas tych nadgodzin. Dane
odczytywane są z kalendarza ‘(Nie)obecności’ pracownika z podziałem na
poszczególne dni lub jako wartość łączna w podsumowaniu. Po oznaczeniu
czasu pracy w poszczególnych dniach znacznikami O.BM, O.NM, W.PŁ, W.NP
ilość czasu pracy będzie pokazywana na wydruku.

Przykłady udzielania czasu wolnego za nadgodziny w dni pracy

Odbiór czasu wolnego w tym samym miesiącu – na wniosek pracownika

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000 zł przepracował dodatkowo
1 godzinę w dzień pracy i odebrał ją w tym samym miesiącu na swój
wniosek. Przepracowaną nadgodzinę oznaczamy strefą ‘Czas przerwy’
(niewliczaną do czasu pracy i niepłatną) oraz znacznikiem ‘O.BM’, a
wolną godzinę strefą ‘Czas pracy podstawowy’ (wliczaną do czasu pracy
i płatną) oraz znacznikiem ‘W.PŁ’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
09.08 czwartekW107:0015:00czas pracy podstawowy-
W215:0016:00czas przerwy
(niewliczana do czasu pracy, niepłatna)
O.BM
10.08 piątekW107:0014:00czas pracy podstawowy-
W214:0015:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)
W.PŁ

Krok II – Wyliczenie czasu pracy i wynagrodzenia
Do czasu pracy wliczamy 175h (‘czas pracy podstawowy’) + 1h (‘czas
pracy podstawowy’ ze znacznikiem W.PŁ) = 176h.
Nie wliczamy tu 1h (‘czas przerwy’ ze znacznikiem O.BM) – wykorzystaną
do wprowadzenia nadgodziny do odbioru w bieżącym miesiącu..
Wynagrodzenie zostanie wypłacone za pełen wymiar czasu pracy (176h),
za tyle godzin, ile przepracował 176h (176h +1 nadgodzina – 1h
wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3000,00

Uwaga

Istnieje możliwość tworzenia własnych stref (na wzór standardowych),
jednak nie jest to konieczne i dodatkowo wiąże się z rozbiciem kwoty
wynagrodzenia zasadniczego na użyte płatne strefy czasu.

Przykładowe własne strefy:
– nadgodz.odbierane BM – zdefiniowana na wzór standardowej strefy
‘Czas przerwy’ (niewliczana do czasu pracy i niepłatna),

– wolne za nadgodz.PŁ– zdefiniowana na wzór standardowej strefy ‘Czas
pracy podstawowy’ (wliczana do czasu pracy
i płatna) oraz znacznikiem ‘W.PŁ’ – dla tej strefy wyliczy się
wynagrodzenie zasadnicze proporcjonalnie do ilości czasu w tej
strefie.

Przy zastosowaniu własnych stref, a w szczególności własnej strefy
płatnej (np. wolne za nadgodz.PŁ) w powyższym przykładzie
wynagrodzenie zasadnicze wyliczy się w 2 częściach:
– Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 2982,95 (3000/176h
norma *175h strefa podstawowa),
– Wynagrodzenie zasadnicze /miesiąc (wolne za nadgodz.PŁ) = 17,05
(3000/176 norma * 1h wolne za nadgodz.PŁ).


Odbiór czasu wolnego w tym samym miesiącu – na wniosek pracodawcy

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000 zł przepracował dodatkowo
1 godzinę w dzień pracy i odbiera ją w tym samym miesiącu na wniosek pracodawcy.
Przepracowaną nadgodzinę oznaczamy strefą ‘Czas przerwy’ (niewliczaną
do czasu pracy i niepłatną) oraz znacznikiem ‘O.BM’, a wolne półtorej
godziny strefą ‘Czas pracy podstawowy’ (wliczaną do czasu pracy i
płatną) oraz znacznikiem ‘W.PŁ’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
09.08 czwartekW107:0015:00czas pracy podstawowy-
W215:0016:00czas przerwy
(niewliczana do czasu pracy, niepłatna)
O.BM
10.08 piątekW107:0013:30czas pracy podstawowy-
W213:3015:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)
W.PŁ


Krok II – Wyliczenie czasu pracy i wynagrodzenia
Do czasu pracy wliczamy 174,5h (‘czas pracy podstawowy’) + 1,5h (‘czas
pracy podstawowy’ ze znacznikiem W.PŁ) = 176h.
Nie wliczamy tu 1h (‘czas przerwy’ ze znacznikiem O.BM) – wykorzystaną
do wprowadzenia nadgodziny do odbioru w bieżącym miesiącu.
Wynagrodzenie zostanie wypłacone za pełen wymiar czasu pracy (176h),
choć pracownik przepracował 175,5h (176h +1 nadgodzina – 1,5h
wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3000,00

Odbiór czasu wolnego w kolejnym miesiącu – na wniosek pracownika

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000zł przepracował dodatkowo
1 godzinę w dzień pracy i odbiera ją w kolejnym miesiącu – wrześniu
2017 r. (wymiar czasu pracy 168h), na swój wniosek.
W 8.2018 przepracowaną nadgodzinę oznaczamy strefą ‘Czas pracy
podstawowy’ (wliczaną do czasu pracy i płatną) oraz znacznikiem
‘O.NM’,
a w 9.2018 wolną godzinę strefą ‘Czas przerwy’ (niewliczaną do czasu
pracy i niepłatną) oraz znacznikiem ‘W.NP’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
09.08 czwartekW107:0015:00czas pracy podstawowy-
W215:0016:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)

O.NM
07.09 piątekW107:0014:00czas pracy podstawowy-
W214:0015:00czas przerwy
(niewliczana do czasu pracy, niepłatna)

W.NP

Krok II – Wyliczenie czasu pracy i wynagrodzenia

W 8.2018 do czasu pracy wliczamy 176h (‘czas pracy podstawowy’) + 1h
(‘czas pracy podstawowy’ ze znacznikiem O.NM) = 177h.
Wynagrodzenie zostanie wypłacone za wszystkie przepracowane godziny
177h (176h + 1 nadgodzina), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3017,05 => 3000+17,05
(powyżej normy wyliczone jako 3000*1/176)

W 9.2018 do czasu pracy wliczamy 159h (‘czas pracy podstawowy’). Nie
wliczamy tu 1h (‘Czas przerwy’ ze znacznikiem W.NP).
Wynagrodzenie zostanie wypłacone za przepracowane godziny 159h (160h –
1h wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 2981,25 => 3000
-18,75 (poniżej normy wyliczone jako 3000*1/160)

Odbiór czasu wolnego w kolejnym miesiącu – na wniosek pracodawcy

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000 zł przepracował dodatkowo 1 godzinę w
dzień pracy i odbiera ją w kolejnym miesiącu – wrześniu 2017 r.
(wymiar czasu pracy 168h), na wniosek pracodawcy.
W 8.2018 przepracowaną nadgodzinę oznaczamy strefą ‘Czas pracy
podstawowy’ (wliczaną do czasu pracy i płatną) oraz znacznikiem
‘O.NM’,
a w 9.2018 wolne półtorej godziny strefą ‘Czas pracy podstawowy’
(wliczaną do czasu pracy i płatną) oraz znacznikiem ‘W.PŁ’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
09.08 czwartekW107:0015:00czas pracy podstawowy-
W215:0016:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)

O.NM
07.09 piątekW107:0013:30czas pracy podstawowy-
W213:3015:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)


W.PŁ

Krok II – Wyliczenie czasu pracy i wynagrodzenia

W 8.2018 do czasu pracy wliczamy 176h (‘czas pracy podstawowy’) + 1h
(‘czas pracy podstawowy’ ze znacznikiem O.NM) = 177h.
Wynagrodzenie zostanie wypłacone za wszystkie przepracowane godziny
177h (176h + 1 nadgodzina), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3017,05 => 3000+17,05
(powyżej normy wyliczone jako 3000*1/176)

W 9.2018 do czasu pracy wliczamy 158,5h (‘czas pracy podstawowy’) +
1,5h (‘czas pracy podstawowy’ ze znacznikiem W.PŁ) = 160h.
Wynagrodzenie zostanie wypłacone za pełny wymiar czasu pracy (160h),
choć pracownik przepracował 158,5h (160h – 1,5h wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3000,00

Przykłady udzielania czasu wolnego za nadgodziny w dni wolne do normy dobowej

Odbiór czasu wolnego w tym samym miesiącu

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000zł przepracował dodatkowo
6 godzin w sobotę i w tym samym miesiącu odbiera za to dzień wolny (8h).
Przepracowane nadgodziny oznaczamy strefą ‘czas przerwy’ (niewliczaną
do czasu pracy, niepłatną) oraz znacznikiem ‘O.BM’, a wolny dzień
strefą ‘czas pracy podstawowy’ (wliczaną do czasu pracy, płatną) oraz
znacznikiem ‘W.PŁ’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
18.08 sobotaW107:0013:00czas przerwy
(niewliczana do czasu pracy, niepłatna)
O.BM
20.08 poniedziałekW107:0015:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)
W.PŁ

Krok II – Wyliczenie czasu pracy i wynagrodzenia
Do czasu pracy wliczamy 168h (‘czas pracy podstawowy’) + 8h (‘czas
pracy podstawowy’ ze znacznikiem W.PŁ) = 176h. Nie wliczamy tu 6h
(‘czas przerwy’ ze znacznikiem O.BM).
Wynagrodzenie zostanie wypłacone za pełen wymiar czasu pracy (176h),
choć pracownik przepracował tylko 174h (176h +6 nadgodzin – 8h
wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3000,00

Odbiór czasu wolnego w kolejnym miesiącu

Przykład

W sierpniu 2018 r. (wymiar czasu pracy 176h) pracownik zatrudniony na
stawkę miesięczną w wys. 3000zł przepracował dodatkowo
6 godzin w sobotę i w kolejnym miesiącu – wrześniu 2018 r. (wymiar
czasu pracy 160h) odbiera za to dzień wolny (8h).

W 8.2018 przepracowane nadgodziny oznaczamy strefą ‘Czas pracy
podstawowy’ (wliczaną do czasu pracy i płatną) oraz znacznikiem
‘O.NM’,
a w 9.2018 wolny dzień strefą ‘Czas przerwy’ (niewliczaną do czasu
pracy i niepłatną) oraz znacznikiem ‘W.NP’.

Krok I – Odnotowanie na kalendarzu

DzieńWejścieGodzina przyjściaGodzina wyjściaPrzykładowa strefaZnacznik
18.08 sobotaW107:0013:00czas pracy podstawowy
(wliczana do czasu pracy, płatna)

O.NM
03.09 poniedziałekW107:0015:00czas przerwy
(niewliczana do czasu pracy, niepłatna)

W.NP 1)

1) Gdy za nadgodziny w dniu wolnym (niedziele / święto) udzielimy w
kolejnym miesiącu dzień wolny (8h) i oznaczymy jako niepłatne (jak
mówią przepisy), to pracownik będzie stratny, będzie miał
pomniejszenie wynagrodzenia za 8h. Działając na korzyść pracownika
można oznaczyć dzień wolny jako płatny (W.PŁ, praca podst.) a
nadgodziny jako niepłatne (O.BM, przerwa).

Krok II – Wyliczenie czasu pracy i wynagrodzenia

W 8.2018 do czasu pracy wliczamy 176h (‘czas pracy podstawowy’) + 6h
(‘czas pracy podstawowy’ ze znacznikiem O.NM) = 182h.
Wynagrodzenie zostanie wypłacone za wszystkie przepracowane godziny
182h (176h + 6 nadgodzin), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 3102,27 =>
3000+102,27 (powyżej normy wyliczone jako 3000*6/176)

W 9.2018 do czasu pracy wliczamy 152h (‘czas pracy podstawowy’). Nie
wliczamy tu 8h (‘Czas przerwy’ ze znacznikiem W.NP).
Wynagrodzenie zostanie wypłacone za przepracowane godziny 152h (160h –
8h wolnego), czyli:
Wynagrodzenie zasadnicze /miesiąc (praca.pdst) = 2850 => 3000 -150
(poniżej normy wyliczone jako 3000*8/160).

Wydruki ewidencji czasu pracy

Wydruk karty pracy dostępny jest z Formularza pracownika/ Wydruki
kadrowe/ Karta pracy lub z Listy pracowników/ Wydruki kadrowe/ Karta
pracy – wszyscy (wydruk dla zaznaczonych). Oba wydruki mają możliwość
drukowania pełnej informacji o czasie pracy w poszczególnych dniach
lub może to być wydruk samego podsumowania. Poszczególne kolumny
obrazują ilościowo: godziny z planu pracy, rzeczywiście przepracowane
godziny, czas pracy ponad i poniżej planu oraz godziny przepracowane w
nocy. Osobna kolumna pokazuje nazwę nieobecności, która wystąpiła w
danym dniu.

W podsumowaniu wykazywana jest informacja o łącznej ilości czasu
nadgodzin 50% i 100% rozliczonych w wypłacie. (Ta informacja pobiera
jest z naliczonych standardowych dopłat do nadgodzin).

Uwaga

W przypadku, gdy w programie rozliczenie nadgodzin opiera się na
własnych dodatkach (wyłączone jest naliczanie standardowych dopłat do
nadgodzin), to Informacja o nadgodzinach nie pojawi się na wydrukach:
karty pracy, listach płac, kwiatkach wypłat, czy pomocniczych
raportach do GUS.

W module Płace i Kadry Plus dostępny jest wydruk Pracownicy z czasem
wolnym za nadgodziny (dostępny z poziomu: Lista pracowników/
Pracownicy) dla zaznaczonych osób, w których wykazywane są informacje
o nadgodzinach do odbioru oraz czasie wolnym udzielonym za nadgodziny
wpisy na czasie pracy z oznaczeniami:

O.BM – nadgodziny do odbioru w bieżącym miesiącu,
O.NM – nadgodziny do odbioru w kolejnym miesiącu,
W.PŁ – wolne za nadgodziny – płatne,
W.NP – wolne za nadgodziny – niepłatne.
