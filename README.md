# CV Opdracht


## Vereisten
- Download [Docker](https://www.docker.com/) en [Composer](https://getcomposer.org/) indien dit nog niet is gedaan
- Voor Windows WSL. Installeer WSL met:
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

2. Maak een **.env** aan in de root van het project en kopieer **.env.example** naar **.env**

3. Installeer de PHP dependencies
```bash
	composer install
```

4. Start de Sail omgeving
```bash
	./vendor/bin/sail up -d
```

5. Migraties en seeder uitvoeren
```bash
	./vendor/bin/sail artisan migrate --seed
```

6. Open een nieuwe terminal en compile Tailwind
```bash
	./vendor/bin/sail npm run dev
```

7. Het CV is zichtbaar op **http://localhost:8080/**, phpMyAdmin op **http://localhost:8081/**

### Beschikbare routes
- /: Homepage met mijn CV