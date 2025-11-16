# CV Opdracht


## Vereisten
- Download [Docker](https://www.docker.com/) indien dit nog niet is gedaan

## Installatie
1. Clone de repository
```bash
   git clone https://github.com/Hendrik657/cv-sollicitatie-opdracht.git
   cd cv-sollicitatie-opdracht
```

2. Maak een **.env** aan in de root van het project en kopieer **.env.example** dat naar **.env**

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

### Beschikbare routes
- /: Homepage met mijn CV