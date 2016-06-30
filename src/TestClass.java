import javax.faces.bean.ManagedBean;

@ManagedBean(name = "testClass")
public class TestClass {

    private String message;

    public TestClass() {
        message = "Test Page";
    }

    public String getMessage() {
        return message;
    }
}
