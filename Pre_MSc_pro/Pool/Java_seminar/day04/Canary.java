public class Canary extends Animal {

    private int eggs = 0;

    protected Canary(String name) {
        super(name, 2, Type.BIRD);

        System.out.println("Yellow and smart? Here I am!");
    }

    int getEggsCount(){
        return eggs;
    }

    void layEgg(){
        eggs++;
    }
    
}
