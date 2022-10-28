/**
 * Animal
 */
public class Animal {

    protected enum Type {
        MAMMAL,
        FISH,
        BIRD;

        public String toString() {
            return name().toLowerCase();
        }
    }

    String name;
    int legs;
    Type type;
    private static int numberOfAnimals;
    private static int numberOfMammals;
    private static int numberOfFish;
    private static int numberOfBirds;

    public String getName(){
        return name;
    }

    public int getLegs(){
        return legs;
    }

    public Type getType(){
        return type;
    }

    protected Animal(String name, int legs, Type type){
        this.name = name;
        this.legs = legs;
        this.type = type;
        numberOfAnimals++;
        switch (type) {
            case MAMMAL: 
                numberOfMammals++;
            break;

            case FISH:
                numberOfFish++;
            break;

            default:
                numberOfBirds++;
            break;
        } 

        System.out.println("My name is " + name + " and I am a " + type + "!");
    }

    public static int getNumberOfAnimals() {
        if (numberOfAnimals == 1){
            System.out.println("There is currently " + numberOfAnimals + " animal in our world.");
        }
        else{
            System.out.println("There are currently " + numberOfAnimals + " animals in our world.");
        }
        return numberOfAnimals;
    }

    public static int getNumberOfMammals() {
        if (numberOfMammals == 1){
            System.out.println("There is currently " + numberOfMammals + " mammal in our world.");
        }
        else{
            System.out.println("There are currently " + numberOfMammals + " mammals in our world.");
        }
        return numberOfMammals;
    }

    public static int getNumberOfFish() {
        if (numberOfFish == 1){
            System.out.println("There is currently " + numberOfFish + " fish in our world.");
        }
        else{
            System.out.println("There are currently " + numberOfFish + " fish in our world.");
        }
        return numberOfFish;
    }

    public static int getNumberOfBirds() {
        if (numberOfBirds == 1){
            System.out.println("There is currently " + numberOfBirds + " bird in our world.");
        }
        else{
            System.out.println("There are currently " + numberOfBirds + " birds in our world.");
        }
        return numberOfBirds;
    }
}