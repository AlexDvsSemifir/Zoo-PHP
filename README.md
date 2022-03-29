# Zoo

J'ai pas tout à fait respecté le cahier des charges, mais je pense avoir fait mieux ! <3

## Diagramme revisité

Copiez-collez le code ci-dessous sur le site [Planttext](https://planttext.com/).

```plantuml
@startuml

skinparam classAttributeIconSize 0

interface Terrestre {
  +marcher()
}
interface Volatile {
  +voler()
}
interface Aquatique {
  +nager()
}

abstract class Animal {
  #manger()
  #dormir()
}

class Chat {
  +allerLitiere()
}

Animal <-- Chat
Terrestre <-- Chat


class Aigle {
}
Animal <-- Aigle
Volatile <-- Aigle

class MartinPecheur {
}
Animal <-- MartinPecheur
Volatile <-- MartinPecheur
Aquatique <-- MartinPecheur

class Dauphin {
}
Animal <-- Dauphin
Aquatique <-- Dauphin

class Zoo {
}

abstract class Conteneur {}
Conteneur <-- Voliere
Conteneur <-- Cage
Conteneur <-- Aquarium

class Voliere {}
class Aquarium {}
class Cage {}

Zoo "1" --o "0..*"Voliere
Zoo "1" --o "0..*" Cage
Zoo "1" --o "0..*" Aquarium



@enduml
```