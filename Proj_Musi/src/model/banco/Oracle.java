package model.banco;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.DriverManager;
import java.sql.Statement;

public class Oracle {
	private String url = "jdbc:oracle:thin:@localhost:1521:brian";
	private String driver = "oracle.jdbc.driver.OracleDriver";
	private String usuario = "Fatec_Sem4";
	private String senha = "nivaldo";
	private Connection conexao = null;
	private PreparedStatement comando = null;
	private Statement comand = null;
	
	public boolean abreComando() {
		boolean retorno = false;
		try {
			comand = conexao.createStatement();
			retorno = true;
		} catch(SQLException ex) {
			System.out.println("Erro: " + ex.toString());
		}
		return retorno;
	}
	
	public ResultSet consulta(String sql) {
		ResultSet resultado = null;
		try {
			resultado = comand.executeQuery(sql);
		} catch(SQLException ex) {
			System.out.println("Erro: " + ex.toString());
		}
		return resultado;
	}
	
	/*é de tipo inteiro poir o executeUpdate retorna em inteiro as linhas que vão ser afetadas
	 ** executeUpdate(ele quem executa comandos para insert, delete e update do sql)**/
	public int dml(String sql) {
		int resultado = 0;
		try {
			resultado = comand.executeUpdate(sql);
		}catch(SQLException ex) {
			System.out.println("Erro: " + ex.toString());
		}
		return resultado;
	}
	
	/* método para carregar o driver do JDBC */
	public boolean carregaDriver() {
		boolean retorno = false;
		try {
			Class.forName(driver);
			retorno = true;
		} catch(ClassNotFoundException ex) {
			System.out.println ("Erro:"+ex.toString());
		}	
		return retorno;
	}
	
	/* método para conectar com o banco */
	public boolean conecta() {
		boolean retorno = false;
		try{
			conexao = DriverManager.getConnection(url, usuario, senha);
			retorno = true;
		}catch(SQLException ex) {
			System.out.println("Erro:"+toString());
		}
		return retorno;
	}
	
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
	public String getDriver() {
		return driver;
	}
	public void setDriver(String driver) {
		this.driver = driver;
	}
	public String getUsuario() {
		return usuario;
	}
	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
	public String getSenha() {
		return senha;
	}
	public void setSenha(String senha) {
		this.senha = senha;
	}
	public Connection getConexao() {
		return conexao;
	}
	public void setConexao(Connection conexao) {
		this.conexao = conexao;
	}
	public PreparedStatement getComando() {
		return comando;
	}
	public void setComando(PreparedStatement comando) {
		this.comando = comando;
	}
	public Statement getComand() {
		return comand;
	}
	public void setComand(Statement comand) {
		this.comand = comand;
	}
}
