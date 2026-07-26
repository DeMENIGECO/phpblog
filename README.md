# 🌐 PHPBlog

> 🪶 Un piccolo blog **semplice, leggero e senza database**, scritto in PHP.

**PHPBlog** è un sistema di blogging minimale pensato per essere facile da installare, personalizzare e modificare.
I post vengono salvati in un semplice file **JSON**, senza bisogno di MySQL o altri database.

Perfetto per piccoli blog personali, progetti scolastici, esperimenti PHP o siti semplici.

---

## ✨ Funzionalità

* 📝 Creazione di nuovi post
* 📖 Visualizzazione completa dei post
* 💾 Salvataggio dei post tramite JSON
* ⚙️ Personalizzazione del nome del blog
* 🦎 Personalizzazione dell'emoji del blog
* 🎨 Interfaccia semplice e responsive
* 🚫 Nessun database necessario
* 🪶 Leggero e veloce
* 🛠️ Codice facile da modificare
* 📦 Installazione semplice

---

## 📸 Anteprima

> Aggiungi qui uno screenshot del tuo blog:

```text
![PHPBlog Screenshot](screenshot.png)
```

---

## 📁 Struttura del progetto

```text
PHPBlog/
├── index.php
├── post.php
├── crea-post.php
├── blog_settings.php
│
├── css/
│   └── style.css
│
└── post/
    ├── posts.php
    └── posts.json
```

### 📄 File principali

| File                | Descrizione                        |
| ------------------- | ---------------------------------- |
| `index.php`         | Pagina principale del blog         |
| `post.php`          | Visualizzazione di un singolo post |
| `crea-post.php`     | Creazione di nuovi post            |
| `blog_settings.php` | Impostazioni del blog              |
| `css/style.css`     | Stili e grafica                    |
| `post/posts.php`    | Gestione dei post                  |
| `post/posts.json`   | Archivio dei post                  |

---

## 🚀 Installazione

### 1. Scarica PHPBlog

Scarica o clona questo repository sul tuo server che supporta PHP.

Ad esempio:

```bash
git clone https://github.com/TUO-USERNAME/PHPBlog.git
```

Oppure scarica il progetto come ZIP ed estrailo nella cartella del tuo server.

---

### 2. Configura il blog

Apri il file:

```text
blog_settings.php
```

Troverai una configurazione simile a questa:

```php
<?php

$blog_name = "PHPBlog";
$emoji = "🌐";

?>
```

Puoi personalizzarla come preferisci:

```php
<?php

$blog_name = "Il mio blog";
$emoji = "🦎";

?>
```

---

### 3. Avvia il server

PHPBlog richiede un server con supporto PHP.

Se hai PHP installato, puoi utilizzare il server integrato:

```bash
php -S localhost:8000
```

Successivamente apri il browser e visita:

```text
http://localhost:8000
```

🎉 Il tuo blog è pronto!

---

## 📝 Creare un post

Per creare un nuovo articolo, apri:

```text
crea-post.php
```

Inserisci:

* 🏷️ il titolo del post
* ✍️ il contenuto

e premi **Pubblica post**.

Il post verrà salvato automaticamente nel file:

```text
post/posts.json
```

---

## 💾 Come funziona il salvataggio?

PHPBlog **non utilizza MySQL, SQLite o altri database**.

Tutti i post vengono memorizzati in:

```text
post/posts.json
```

Questo rende il progetto:

* 🪶 leggero
* 🚀 semplice da configurare
* 📦 facile da trasferire
* 🛠️ facile da modificare
* 🚫 indipendente da un database

> 💡 Per un blog molto grande, un database potrebbe essere una soluzione più adatta. PHPBlog è pensato soprattutto per progetti piccoli e semplici.

---

## 🛠️ Tecnologie

PHPBlog utilizza tecnologie web semplici e accessibili:

* 🐘 **PHP**
* 🌐 **HTML**
* 🎨 **CSS**
* 💾 **JSON**

Non sono richiesti framework o database esterni.

---

## 🔒 Sicurezza

Se utilizzi PHPBlog su un server pubblico, assicurati di proteggere adeguatamente il file:

```text
post/posts.json
```

Inoltre, per un utilizzo reale in produzione, è consigliabile aggiungere:

* 🔐 autenticazione per la creazione dei post
* 🛡️ protezione CSRF
* 🧹 validazione e sanitizzazione degli input
* 🚫 protezione dell'accesso diretto ai file sensibili
* 📋 controllo dei permessi di scrittura

PHPBlog è un progetto semplice e non dovrebbe essere considerato automaticamente sicuro per un ambiente pubblico senza ulteriori protezioni.

---

## 🎨 Personalizzazione

Puoi modificare facilmente l'aspetto del blog attraverso:

```text
css/style.css
```

Puoi cambiare colori, font, dimensioni, spaziature e layout senza modificare la struttura PHP.

Puoi inoltre personalizzare il nome e l'emoji direttamente da:

```text
blog_settings.php
```

---

## 📜 Licenza

PHPBlog è distribuito con la **MIT License**.

Puoi utilizzare, modificare e distribuire il progetto secondo i termini della licenza.

---

## 🦎 Autore

Creato con ❤️ da **DomeniGeco**.

---

## ⭐ Ti piace PHPBlog?

Se PHPBlog ti è utile, puoi:

⭐ lasciare una **stella** al repository
🐛 segnalare eventuali problemi
💡 proporre nuove funzionalità
🔧 contribuire al progetto

Grazie per aver provato **PHPBlog**! 🌐🦎
