# ELTEbet&#x26BD; &mdash; 2021-es EB góltotó projekt felhasználói dokumentációja
Egy webes goltotó alkalmazás a 2021-es európa bajnoksághoz.

![Euro 2020 logo](/documentation/UEFA_Euro_2020_Logo.svg)

## Szabályrendszer
A felhasználók tippelhetnek a mérközések végeredményeire, legkésöbb azok kezdetéig.
Egy mérközésre leadott tipp..
- **5 pontot** ér, ha pontosan eltalálja az eredményt.
- **3 pontot** ér, ha eltalálja a meccs kimenetelét és a vendég/hazai gólkülönbséget, de a pontos gólszámot nem.
- **2 pontot** ér, ha eltalálja a meccs kimenetelét és a pontos gólszámot, de a vendég/hazai gólkülönbséget nem.
- **1 pontot** ér, ha eltalálja a meccs kimenetelét, de se a gólkülönbséget, se a pontos gólszámot nem sikerül megtippelni.
- **0 pontot** ér minden egyéb eset.

### Példa #1
**Németország - Magyarország**
- Felhasználó tippje: 4-2
- Hivatalos eredmény: 5-1
- A felhasználó a tippjéért **2 pontot** kap, mert eltalálta a mérközés kimenetelét és a gólszámot, de a vendég/hazai gólkülönbséget nem.

### Példa #2
**Svédország – Lengyelország**
- Felhasználó tippje: 1-1
- Hivatalos eredmény: 0-0
- A felhasználó a tippjéért **1 pontot** kap, mert csak a mérközés kimenetelét tippelte meg helyesen.

### Példa #3
**Horvátország – Skócia**
- Felhasználó tippje: 4-3
- Hivatalos eredmény: 2-1
- A felhasználó a tippjéért **3 pontot** kap, mert eltalálta a mérközés kimenetelét és a vendég/hazai gólkülönbséget, de a gólszámot nem.


## Funkcionális követelmények
- A felhasználó tud magának fiókot regisztrálni, ami szükséges a tippeléshez.
- Felhasználó tippelhet a mérközések végeredményeire azok kezdetéig, módosíthajta is tippjét.
- Szervező olyan felhasználó, aki felelős a hivatalos eredmények feltöltésért.
- Ranglista, amely a hivatalos eredmény felvitele után automatikusan frissül.

## Nem funkcionális követelmények
- Igényes, felhasználó barát, reszponzív felület.
- Legfrissebb Chrome/Opera böngésző.
