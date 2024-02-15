SELECT     (SELECT     SUM(koszt_dostawy / Ilosc_partii) AS Expr1
                       FROM          dbo.KTKosztyTransportu AS kt
                       WHERE      (trS_gidnumer = SELEMPZ.TrS_GIDNumer) AND (LP = SELEMPZ.TrS_GIDLp) AND (LP_PZ = ELEMPZ.TrE_GIDLp)) AS koszt_dostawy_jednostkowy, 
                      SELEM.TrS_DstNumer AS NumerDosatwy, ELEM.TrE_TwrKod AS KodTowaru, DOST.Dst_TrnNumer, DOST.Dst_TrnTyp, SELEMPZ.TrS_GIDNumer AS GIDDokumentu
FROM         CDN.TraNag AS NAG INNER JOIN
                      CDN.TraElem AS ELEM ON NAG.TrN_GIDTyp = ELEM.TrE_GIDTyp AND NAG.TrN_GIDNumer = ELEM.TrE_GIDNumer LEFT OUTER JOIN
                      CDN.TraSElem AS SELEM ON ELEM.TrE_GIDTyp = SELEM.TrS_GIDTyp AND ELEM.TrE_GIDNumer = SELEM.TrS_GIDNumer AND ELEM.TrE_GIDLp = SELEM.TrS_GIDLp LEFT OUTER JOIN
                      CDN.Dostawy AS DOST ON SELEM.TrS_DstNumer = DOST.Dst_GIDNumer INNER JOIN
                      CDN.TraElem AS ELEMPZ ON ELEMPZ.TrE_GIDTyp = DOST.Dst_TrnTyp AND ELEMPZ.TrE_GIDNumer = DOST.Dst_TrnNumer AND ELEMPZ.TrE_TwrNumer = DOST.Dst_TwrNumer LEFT OUTER JOIN
                      CDN.TraSElem AS SELEMPZ ON ELEMPZ.TrE_GIDTyp = SELEMPZ.TrS_GIDTyp AND ELEMPZ.TrE_GIDNumer = SELEMPZ.TrS_GIDNumer AND ELEMPZ.TrE_GIDLp = SELEMPZ.TrS_GIDLp
WHERE     (NAG.TrN_GIDTyp = 2033) AND (NAG.TrN_GIDFirma = 124929)
