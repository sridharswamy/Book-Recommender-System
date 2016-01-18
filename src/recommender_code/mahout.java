package com.predictionmarketing.convert;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.List;
import org.apache.mahout.cf.taste.common.TasteException;
import org.apache.mahout.cf.taste.impl.common.LongPrimitiveIterator;
import org.apache.mahout.cf.taste.impl.model.jdbc.MySQLJDBCDataModel;
import org.apache.mahout.cf.taste.impl.recommender.GenericItemBasedRecommender;
import org.apache.mahout.cf.taste.impl.similarity.EuclideanDistanceSimilarity;
import org.apache.mahout.cf.taste.model.JDBCDataModel;
import org.apache.mahout.cf.taste.recommender.RecommendedItem;
import org.apache.mahout.cf.taste.similarity.ItemSimilarity;
import com.mysql.jdbc.PreparedStatement;
import com.mysql.jdbc.Statement;
import com.mysql.jdbc.jdbc2.optional.MysqlDataSource;
public class ItemRecommend {
public static void main(String[] args) throws SQLException {
try {
MysqlDataSource dataSource = new MysqlDataSource ();
dataSource.setServerName("localhost");
dataSource.setUser("root");
dataSource.setPassword("");
dataSource.setDatabaseName("new_seminar") ;
JDBCDataModel dm = new MySQLJDBCDataModel(dataSource,"taste_preferences","user_id","item_id", "preference",null);
ItemSimilarity sim=new EuclideanDistanceSimilarity(dm);
//ItemSimilarity sim=new LogLikelihoodSimilarity(dm);
GenericItemBasedRecommender recommender=new GenericItemBasedRecommender(dm,sim);
Connection conn = null;
Statement stmt = null;
final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
final String DB_URL = "jdbc:mysql://localhost:3306/new_seminar";
final String USER = "root";
final String PASS = "";
conn = DriverManager.getConnection(DB_URL, USER, PASS);
try {
Class.forName("com.mysql.jdbc.Driver");
} catch (ClassNotFoundException e1) {
e1.printStackTrace();
}
int x=1;
for(LongPrimitiveIterator items = dm.getItemIDs(); items.hasNext();)
{
long itemId = items.nextLong();
List<RecommendedItem> recommendations = recommender.mostSimilarItems(itemId,5);
for(RecommendedItem recommendation:recommendations)
{
System.out.println(itemId + "," + recommendation.getItemID() + "," + recommendation.getValue() );
Long user=itemId;
Long item=recommendation.getItemID();
Float rating=recommendation.getValue();
stmt = (Statement) conn.createStatement();
String sql = "INSERT INTO preferencesEuclid (user_id,item_id,preference)" + "VALUES (?, ?, ?)";
PreparedStatement preparedStatement = null;
try {
preparedStatement = (PreparedStatement) conn.prepareStatement(sql);
} catch (SQLException e) {
e.printStackTrace();
}
preparedStatement.setLong(1,user);
preparedStatement.setLong(2,item);
preparedStatement.setFloat(3,rating);
preparedStatement.executeUpdate();
}
x++;
if(x>1000)
System.exit(1);
}
System.out.println("Thank you!");
}
catch (TasteException e) {
// TODO Auto-generated catch block
e.printStackTrace();
System.out.println("taste exception occurred");
}
}
}