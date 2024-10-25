# Nuovo progetto in Laravel 10 + Bootstrap 5.x + SASS
<div style="display:flex; justify-content:space-between">
<img src="https://www.geekandjob.com/uploads/wiki/106eb730f7c2e52c9e0eb4b2d7a649ce.svg" width="200">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/800px-Bootstrap_logo.svg.png" width="200">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="200">
</div>

---

- Prima di tutto eseguiamo il solito comando di installazione di npm

    - Eseguiamo npm install
    - Eseguiamo il comando per aggiungere sass npm i --save-dev sass o npm install -D sass
    - Modifichiamo la cartella resources/css in resources/scss
    - Modifichiamo il file resources/css/app.css in resources/scss/app.scss
    - Modifichiamo il file vite.config.js aggiungendo a plugins il path giusto da 'resources/css/app.css' a 'resources/scss/app.scss' ,
    - Aggiungiamo un alias al file vite.config.js per facilitare l'accesso a resources:

```
    resolve: {
            alias: {
                '~resources' : "/resources/"
            }
    } 
```

- Aggiungiamo import "~resources/scss/app.scss"; al file resources/js/app.js
- Aggiungiamo @vite("resources/js/app.js") ad ogni layout della nostra      applicazione
- Aggiungiamo a resources/js/app.js una direttiva per la corretta gestione delle immagini

```
import.meta.glob([
    '../img/**'
]);
```

- Aggiungiamo la riga package-lock.json al file .gitignore

- Aggiungiamo Bootstrap 5 al nostro progetto
- Installiamo attraverso npm i due pacchetti necessari a Bootstrap npm i bootstrap @popperjs/core
- Aggiungo in cima al file vite.config.js questa riga const path = require("path");
- Aggiungo agli alias sempre in vite.config.js

```
alias: {
            '~resources' : "/resources/",
            '~bootstrap' : path.resolve(__dirname, "node_modules/bootstrap")
        }
```

- Aggiungiamo @use "~bootstrap/scss/bootstrap" as *; al nostro file app.scss
- Aggiungiamo import * as bootstrap from "bootstrap"; al nostro file app.js

# Come usare una template repository

- Apri la repository su github e in alto a destra clicca su "Use this template" e poi crea una nuova repository
- Le diamo un nome come richiesto
- La cloniamo direttamente dalla nostra IDE (vscode)
- Apriamo la repository
- Copio e incollo il mio file .env.example e lo rinomino come .env
- Eseguiamo npm install
- Eseguiamo composer install
- Eseguiamo il comando di generazione della chiave univoca del nostro progetto con php artisan key:generate
- Eseguiamo i due comandi di esecuzione costante in due terminali separati (anche paralleli, volendo) npm run dev e php artisan serve
