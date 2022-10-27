public class Astronaut{

    String name;
    int snacks=0;
    String destination=null;
    static int id=0;
    int newId;

    public Astronaut(String nameAstronaut){
        name = nameAstronaut;
        newId = id;
        id++;
        System.out.println(name + " ready for launch!");
    }

    public int getId(){
        return newId;
    }

    public String getName() {
        return name;
    }

    public int getSnacks() {
        return snacks;
    }

    public String getDestination() {
        return destination;
    }

    void doActions(){
        System.out.println(name + ": Nothing to do.");

        if (destination==null){
            System.out.println(name + ": I may have done nothing, but I have " + snacks + " Mars to eat at least!");
        }
    }

    void doActions(planet.Mars planet){
        System.out.println(name + ": Started a mission!");
        destination = planet.getLandingSite();
        
        if (destination==null){
            System.out.println(name + ": I may have done nothing, but I have " + snacks + " Mars to eat at least!");
        }
    }

    void doActions(chocolate.Mars choco){
        System.out.println(name + ": Thanks for this mars number " + choco.getId());
        snacks++;

        if (destination==null){
            System.out.println(name + ": I may have done nothing, but I have " + snacks + " Mars to eat at least!");
        }
    }
}