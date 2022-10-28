public class Shark extends Animal {

    private boolean frenzy = false;

    protected Shark(String name) {
        super(name, 0, Type.FISH);

        System.out.println("A KILLER IS BORN!");
    }

    void smellBlood(boolean blood){
        frenzy = blood;
    }

    void status(){
        if (frenzy){
            System.out.println(name + " is smelling blood and wants to kill.");
        }
        else {
            System.out.println(name + " is swimming peacefully.");
        }
    }
    
}
