package com.internousdev.login_practice.dao;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;DBConnector;

public class Login_practice_DAO {
	public Login_practice_DTO select(String name,String password)throws SQLException{
		Loogin_practice_DTO dto=new Login_practice_DTO();
		DBConnector db=new DBConnector();
		Connection con=db.getConnection();
		String sql="select*from user where user_name=? and password=?";

		try{
			PreparedStatement ps=con.prepareStatement(sql);
			ps.setString(1, name);
			ps.setString(2, password);
			ResultSet rs=ps.executeQuery();

			if(rs.next()){
				dto.setName(rs.getString("user_name"));
				dto.setPassword(rs.getString("password"));
			}
		}catch(SQLException e){
			e.printStackTrace();
		}finally{
			con.close();
		}
		return dto;
	}
}