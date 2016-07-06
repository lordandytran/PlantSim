import javax.faces.bean.ManagedBean;
import java.sql.*;

@ManagedBean(name = "dbdriver", eager = true)
public class DBdriver {

    private static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    private static final String DB_URL = "jdbc:mysql://vergil.u.washington.edu:252525/445ProjDB";
    private static final String USER = "user1";
    private static final String PASS = "445DataProj";

    private Connection connect = null;
    private Statement statement = null;
    private PreparedStatement preparedStatement = null;
    private ResultSet resultSet = null;

    public DBdriver() throws SQLException, ClassNotFoundException{
        //Load JDBC driver
        Class.forName(JDBC_DRIVER);
        //Open DB connection
        connect = DriverManager.getConnection(DB_URL, USER, PASS);
    }

    public void closeDB() throws SQLException{
        connect.close();
        statement.close();
        resultSet.close();
    }

    public ResultSet getResultSet() {
        return resultSet;
    }

    public Statement getStatement() {
        return statement;
    }

    public ResultSet ExecuteQuery(String sql) throws SQLException{
        statement = connect.createStatement();
        resultSet = statement.executeQuery(sql);
        return resultSet;
    }

    public void UpdateTables(String sql) throws SQLException {
        statement = connect.createStatement();
        statement.executeLargeUpdate(sql);
    }
}
