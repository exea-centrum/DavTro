SELECT * FROM
CDN.ListyPlac
JOIN CDN.Wyplaty ON CDN.ListyPlac.LPL_LPlId=CDN.Wyplaty.WPL_LplId
JOIN CDN.WypElementy ON CDN.Wyplaty.WPL_WplID=CDN.WypElementy.WPE_WplId
JOIN CDN.Pracidx ON CDN.Wyplaty.WPL_PraId=CDN.Pracidx.PRI_PraId
JOIN CDN.TypWyplata ON CDN.WypElementy.WPE_TwpId=CDN.TypWyplata.TWP_TwpId
WHERE CDN.ListyPlac.LPL_LplId=472;

https://pomoc.comarch.pl/optima/pl/2018/index.php/dokumentacja/opt057-strojenie-wydajnosciowe-baz-ms-sql-dla-comarch-erp-optima/

https://cdn.3lance.pl/viewforum.php?f=17&sid=b1c85fc311c2312a4a551cd758d64f5e

