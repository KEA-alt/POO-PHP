# A faire

## Étape 1
Créer deux nouvelles classes : Warrior et Mage.

Warrior : c'est notre Character actuel.
Mage : il a une attaque "Boule de feu" (aka "fireball"). Cette attaque coûte des point de magie.

Boule de feu :
- Entre 5-10 points de magie.
- Ce montant * 2 en dégats.
- Si plus assez de magie, il donne un coup de couteau, qui fait 2 de dégats.


Bonus : 
Si il n'a pas assez de magie pour lancer son sort, il utilise juste son restant.

Ex :
Point de magie : 6.
Rand : 7
Dégât : 6 * 2.


## Étape 2
Le Mage à maintenant 2 options : lancer son sort ou lancer un bouclier magique. Le choix est fait aléatoirement.

Bouclier magique : la prochaine attaque que subit le mage ne lui fait aucun dégât.

## Étape 3 (aussi appelé "Étape 2")
Mage :
50% de chance d'attaquer
50% de chance de lancer un bouclier. Il ne prendra pas de dégat à la prochaine attaque.

## Étape 4
Warrior :
Soit attaquer (80%)
Soit il peut charger sont attaque (20%). Au tour suivant, il fait dégats * (1.7, 3).


## Étape 5
Faire une BDD.
1 table : characters : 
- id
- type (ex: "Mage", "Warrior", ...)
- name (ex: "pika", "cloud")

Depuis l'index, récupérer les infos de la table characters, afin d'afficher autant de boutons qu'il y a de personnages différents.

$arr = [
    '1' => 'Warrior', 
    '2' => 'Mage'
]

```php
new $arr['1']($arr['name']); ==> new Warrior('pika');
```

## Étape 5 bis
Connexion à la bdd sera à faire à l'aide d'un singleton (design patern)


## Étape 6
Faire en sorte que nos boutons fonctionnent.
Une fois qu'on a cliqué deux fois sur les boutons, le combat se lance.