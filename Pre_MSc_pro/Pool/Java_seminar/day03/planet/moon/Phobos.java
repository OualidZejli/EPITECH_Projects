package planet.moon;

public class Phobos {
    
    planet.Mars mars;
    String landingSite;

    public planet.Mars getMars() {
        return mars;
    }

    public String getLandingSite() {
        return landingSite;
    }

    public Phobos(planet.Mars mars, String landingSite){
        System.out.println("Phobos placed in orbit.");

        this.landingSite = landingSite;
    }
}
