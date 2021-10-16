%m: místico
%i: imortal
%f: mamífero
%c: chifre
%a: mágico
i :- m. %se místico, então imortal
m :- i,
m ; f. %se não é místico, então mamífero e mortal
c :- f.
c :- i. %se imortal ou mamífero, então tem chifre
a :- c. %se tem chifre, então mágico


