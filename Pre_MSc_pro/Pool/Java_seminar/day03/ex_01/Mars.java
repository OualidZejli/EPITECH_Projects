public class Mars{
    static int id = 0;
    int newId;
    
    public Mars(){
        newId = id;
        id++; 
    }

    public int getId(){
        return newId;
    }
}