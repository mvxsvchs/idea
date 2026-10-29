# 💡 Idea

**Idea** is eine webbasierte Anwendung zum Sammeln, Organisieren und Verwalten von Ideen. Das Projekt wird mit Laravel entwickelt und dient dazu, die Grundlagen der modernen Webentwicklung praktisch zu erlernen.

> 🎓 **Lernprojekt:** Dieses Projekt entsteht im Rahmen des Laracasts-Kurses [Laravel From Scratch (2026 Edition)](https://laracasts.com/series/laravel-from-scratch-2026) von Jeffrey Way.

## 📚 Über das Projekt

Ziel dieses Projekts ist es, die im Kurs vermittelten Konzepte praktisch umzusetzen und dabei schrittweise eine Laravel-Anwendung aufzubauen.

Der Kurs behandelt unter anderem Routing, Controller, Datenbanken, Eloquent ORM, Authentifizierung, Autorisierung, Testing und Deployment. Die Anwendung wird im Verlauf des Lernprozesses kontinuierlich erweitert.

## ✨ Features

- **Benutzerregistrierung** – neue Benutzerkonten erstellen.
- **Login und Logout** – Benutzer authentifizieren und Sitzungen verwalten.
- **Persönliche Ideenübersicht** – eigene Ideen anzeigen.
- **Ideendetails** – einzelne Ideen aufrufen.
- **Datenbankanbindung** – Anwendungsdaten mit Laravel und Eloquent verwalten.
- **Formularvalidierung** – Benutzereingaben serverseitig überprüfen.
- **Wiederverwendbare Komponenten** – gemeinsame UI-Elemente mit Blade erstellen.
- **Modernes Frontend** – Gestaltung mit Tailwind CSS und interaktive Elemente mit Alpine.js.

*Hinweis: Der Funktionsumfang befindet sich in Entwicklung. Nicht alle geplanten Funktionen sind bereits vollständig implementiert.*

## 🛠️ Technologien

| Technologie | Verwendung |
|---|---|
| PHP | Serverseitige Programmlogik |
| Laravel | PHP-Webframework |
| Blade | Template-Engine |
| SQLite | Datenbank für die lokale Entwicklung |
| Tailwind CSS | Gestaltung der Benutzeroberfläche |
| Alpine.js | Leichte JavaScript-Interaktivität |
| Vite | Frontend-Entwicklung und Asset-Build |
| Composer | Verwaltung der PHP-Abhängigkeiten |
| npm | Verwaltung der Frontend-Abhängigkeiten |
| Git und GitHub | Versionsverwaltung und Quellcode-Hosting |

## 🚀 Installation

### Voraussetzungen

Installiere folgende Werkzeuge, bevor du das Projekt startest:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js und npm](https://nodejs.org/)
- [Git](https://git-scm.com/)

Die benötigte PHP-Version und weitere Abhängigkeiten richten sich nach der Projektkonfiguration.

### 1. Repository klonen

```bash
git clone https://github.com/mvxsvchs/idea.git
cd idea
```

### 2. PHP-Abhängigkeiten installieren

```bash
composer install
```

### 3. Umgebungsdatei erstellen

Kopiere die Beispielkonfiguration:

```bash
cp .env.example .env
```

Unter Windows PowerShell kannst du stattdessen folgenden Befehl verwenden:

```powershell
Copy-Item .env.example .env
```

Generiere den Anwendungsschlüssel:

```bash
php artisan key:generate
```

### 4. Datenbank konfigurieren

Das Projekt kann lokal mit SQLite betrieben werden.

Erstelle die Datenbankdatei, falls sie noch nicht existiert:

```bash
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
```

Stelle sicher, dass in der `.env`-Datei die SQLite-Verbindung konfiguriert ist:

```dotenv
DB_CONNECTION=sqlite
```

Führe die Datenbankmigrationen aus:

```bash
php artisan migrate
```

### 5. Frontend-Abhängigkeiten installieren

Installiere die benötigten npm-Pakete:

```bash
npm install
```

Erstelle die Frontend-Assets:

```bash
npm run build
```

### 6. Anwendung starten

Starte den lokalen Laravel-Entwicklungsserver:

```bash
php artisan serve
```

Öffne die angezeigte URL im Browser. Standardmäßig erreichst du die Anwendung unter:

[http://127.0.0.1:8000](http://127.0.0.1:8000)

## 💻 Entwicklung

Während der Entwicklung kannst du Vite im Entwicklungsmodus starten:

```bash
npm run dev
```

Starte den Laravel-Server in einem zweiten Terminal:

```bash
php artisan serve
```

Vite stellt dabei die Frontend-Entwicklungsumgebung bereit.

## 🧪 Tests

Die vorhandenen automatisierten Tests lassen sich mit folgendem Befehl ausführen:

```bash
php artisan test
```

Die Tests helfen dabei, das erwartete Verhalten der Anwendung zu überprüfen und Fehler frühzeitig zu erkennen.

## 📁 Projektstruktur

Die wichtigsten Verzeichnisse und Dateien des Laravel-Projekts:

```text
idea/
├── app/
│   ├── Http/
│   │   ├── Controllers/       # Controller und Anwendungslogik
│   │   └── Requests/          # Request-Validierung
│   ├── Models/                # Eloquent-Modelle
│   └── Providers/             # Service Provider
├── bootstrap/                  # Laravel-Bootstrap
├── config/                     # Anwendungskonfiguration
├── database/
│   ├── migrations/             # Datenbankschema
│   ├── factories/              # Model-Factories
│   └── seeders/                # Beispieldaten
├── public/                     # Öffentlich erreichbare Dateien
├── resources/
│   ├── css/                    # CSS und Tailwind
│   ├── js/                     # JavaScript
│   └── views/                  # Blade-Templates
├── routes/
│   └── web.php                 # Web-Routen
├── storage/                    # Logs und gespeicherte Dateien
├── tests/                      # Automatisierte Tests
├── .env.example                # Beispiel für Umgebungsvariablen
├── artisan                     # Laravel-Kommandozeile
├── composer.json               # PHP-Abhängigkeiten
├── package.json                # Frontend-Abhängigkeiten
└── vite.config.js              # Vite-Konfiguration
```

## 🎯 Lernziele

Durch die praktische Arbeit an Idea werden insbesondere folgende Themen vertieft:

- Grundlagen von Laravel und MVC-Architektur
- Routing, Controller und HTTP-Requests
- Blade-Templates und wiederverwendbare Komponenten
- Datenbankmigrationen und Eloquent ORM
- Beziehungen zwischen Datenbankmodellen
- Benutzerregistrierung und Authentifizierung
- Validierung von Formularen und Fehlerbehandlung
- Frontend-Entwicklung mit Tailwind CSS und Alpine.js
- Schreiben und Ausführen automatisierter Tests
- Versionsverwaltung mit Git und GitHub

## 🗺️ Geplante Weiterentwicklung

Im Verlauf des Lernprojekts können weitere Funktionen ergänzt und bestehende Bereiche verbessert werden, beispielsweise:

- Ideen erstellen, bearbeiten und löschen
- Ideen nach Status filtern
- Benutzerbezogene Zugriffsrechte umsetzen
- Benutzeroberfläche und Barrierefreiheit verbessern
- Weitere automatisierte Tests schreiben
- Anwendung für eine produktive Umgebung vorbereiten

## 🔐 Sicherheit

Für die lokale Entwicklung und eine mögliche spätere Veröffentlichung gelten folgende Grundregeln:

- Keine Passwörter, API-Schlüssel oder sonstigen Geheimnisse committen.
- Die `.env`-Datei nicht in das Git-Repository aufnehmen.
- Die `.env.example` ausschließlich mit unkritischen Beispielwerten pflegen.
- Benutzereingaben serverseitig validieren.
- Zugriffsrechte für benutzerspezifische Daten serverseitig überprüfen.

## 🎓 Kurs und Credits

Dieses Projekt orientiert sich am Kurs:

**[Laravel From Scratch (2026 Edition)](https://laracasts.com/series/laravel-from-scratch-2026)**

- **Plattform:** Laracasts
- **Instructor:** Jeffrey Way
- **Ziel:** Laravel durch praktische Übungen und den Aufbau einer vollständigen Anwendung lernen.

Idea ist ein persönliches Lern- und Übungsprojekt. Die Umsetzung wird im Rahmen des Lernprozesses schrittweise entwickelt und erweitert.

## 📄 Lizenz

Für dieses Repository ist derzeit keine Lizenz angegeben. Falls der Quellcode zur Nutzung oder Weiterverbreitung freigegeben werden soll, sollte eine passende `LICENSE`-Datei ergänzt werden.

---

*Built while learning Laravel — one idea at a time.* 💡
