// exemple planets //
SELECT films.episode_id, title, films_planets.url, planets.name FROM films JOIN films_planets ON 
films.episode_id=films_planets.episode_id JOIN planets ON films_planets.url=planets.url


// exo 1 //
SELECT people.name, people_species.url, species.name FROM people JOIN people_species ON people.name=people_species.name JOIN species ON people_species.url=species.url

// exo 2 //
SELECT films.episode_id, films_species.url, people.name FROM films JOIN people_species ON 
films.episode_id=.episode_id JOIN people_species ON people_species.url=species.url