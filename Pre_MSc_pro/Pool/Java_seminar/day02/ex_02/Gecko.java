public class Gecko {
    String name;
    public static void main(String[] args) {

    }
    public Gecko(String str) {
        name = str;
        System.out.println("Hello " + name+"!");
    }
    public Gecko() {
        this.name = "Unknown";
        System.out.println("Hello!");
    }

}