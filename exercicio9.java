



import javax.swing.JOptionPane;
import class exercicio9 {
	public static void main(String []){
		int massa, altura, imc;
		massa = Interger.parseInt(JOptionPane.showInputDialog("Massa em KG:") );
		altura = Interger.parseInt(JOptionPane.showInputDialog("Altura em metros:") );
		imc = massa / altura*2;
		JOptionPane.showMessageDialog(null, "Seu IMC é:"+imc);
	}
}