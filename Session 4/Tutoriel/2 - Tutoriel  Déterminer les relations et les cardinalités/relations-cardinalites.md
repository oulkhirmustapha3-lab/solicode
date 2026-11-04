

| Entité A | Cardinalité A | Verbe métier | Cardinalité B | Entité B | Régle de gestion |
| :---- | :---- | :---- | :---- | :---- | :---- |
| Ville | 1,N | habite | 1,1 | Auteur | Une ville peut accueillir plusieurs auteurs. Un auteur habite dans une seule ville.   |
| Auteur | 1,N | rédige | 1,1 | Article | Un auteur peut rédiger plusieurs articles. Un article est rédigé par un seul auteur.  |
| Catégorie | 1,N | regroupe | 1,1 | Article | Une catégorie regroupe plusieurs articles. Un article appartient à une seule catégorie. |
| Article | 0,N | posséde | 0,N | Tag | Un article peut avoir plusieurs tags. Un tag peut être associé à plusieurs articles.  |

