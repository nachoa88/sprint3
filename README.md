# Sprint 3 - PHP i Patterns
Utilitzat `docker compose` command amb el fitxer `docker-compose.yml` i un `Dockerfile` personalitzat per crear els contenidors i conexions a MySQL y MongoDB.

### Patterns
## Nivell 1 - Singleton
1) Definit el mètode `getInstance()` sense cap arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
2) Fet un loop que imprimeix en pantalla múltiples vegades el rugit de Tigger.
3) Afegeit un mètode `getCounter()` que retorna el nombre de vegades que Tigger ha realitzat rugits.

## Nivell 2 - Adapter
1) Adaptem la classe Turkey per que es "comporti" i utilitzi els mètodes de Duck.

## Nivell 3 - Strategy
1) Adaptem la funció couponGenerator amb el Strategy Pattern, creem una Strategy interfície amb una funció que serà aplicada de forma diferent per les marques de cotxes. Per un altre banda, creem un context que ens permetrà generar el cupó.

### Developers Team
## Nivell 1
1) MVC Task TO-DO projecte amb una base de dades en format .json.

## Nivell 2
1) Mateix però amb MySQL.

## Nivell 3
1) Mateix però amb MongoDB.
