package ex_05;

public class Gecko {
    private String name;
    private int age;
    public static void main(String[] args) {

    }
    public Gecko(String noun, int age) {
        name = noun;
        this.age = age;

        System.out.println("Hello " + name+"!");
    }
    public Gecko() {
        this.name = "Unknown";
        System.out.println("Hello!");
    }

    public String getName(){
        return name;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    void status(){

        switch(age){
            case 0:
            System.out.println("Unborn Gecko");
            break;

            case 1: case 2:
            System.out.println("Baby Gecko");
            break;

            case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 10:
            System.out.println("Adult Gecko");
            break;

            case 11: case 12: case 13:
            System.out.println("Old Gecko");
            break;

            default:
            System.out.println("Impossible Geckoo");
            break;
        }

    }

    public void hello(String str) {
            
        System.out.println("Hello " + str + ", I'm " + name + "!");
    }

    public void hello(int nbr) {
            
        for (int i = 0; i<nbr; i++){
            System.out.println("Hello" + ", I'm " + name + "!");
        }
    }
}
