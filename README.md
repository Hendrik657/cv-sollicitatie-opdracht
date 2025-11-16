# CV Opdracht


## Vereisten
- [Docker](https://www.docker.com/)
- [Composer](https://getcomposer.org/)
- [Visual Studio Code](https://code.visualstudio.com/)
- VS Code extensies:
	- Laravel
	- Laravel Blade Snippets
	- PHP Intelephense
	- Container Tools
- Voor Windows WSL. Installeer WSL via Powershell of CMD met:
```bash
	wsl --install
```

## Installatie
**Belangrijk voor Windows: Onderstaande stappen uitvoeren op een WSL omgeving (Ubuntu terminal).**

1. Clone de repository
```bash
	git clone https://github.com/Hendrik657/cv-sollicitatie-opdracht.git
	cd cv-sollicitatie-opdracht
```

2. Open Visual Studio Code
```bash
	code .
```

3. Maak een **.env** aan in de root van het project en kopieer **.env.example** naar **.env**

4. Installeer de PHP dependencies
```bash
	composer install
```

5. Start de Sail omgeving
```bash
	./vendor/bin/sail up -d
```

6. Maak een app key
```bash
	./vendor/bin/sail artisan key:generate
```

7. Migraties en seeder uitvoeren
```bash
	./vendor/bin/sail artisan migrate --seed
```

8. Open een nieuwe terminal en installeer npm packages
```bash
	./vendor/bin/sail npm install
```
```bash
	./vendor/bin/sail npm run dev
```

9. Het CV is zichtbaar op **http://localhost:8080/**, phpMyAdmin op **http://localhost:8081/**

### Beschikbare routes
- /: Homepage met mijn CV