package com.chenluozhi.frame;

import javax.swing.JPanel;
import javax.swing.JLabel;
import java.awt.Rectangle;
import javax.swing.JButton;
import javax.swing.JDialog;

import java.awt.Color;

public class About extends JDialog {

	private static final long serialVersionUID = 1L;
	private JPanel jContentPane = null;
	private JButton jButton_ok = null;
	private JLabel jLabel_text1 = null;
	private JLabel jLabel_text2 = null;

	public About() {
		super();
		initialize();
	}
	private void initialize() {
		this.setSize(417, 114);
		this.setLocationRelativeTo(null);
		this.setTitle("关于");
			jLabel_text2 = new JLabel();
			jLabel_text2.setBounds(new Rectangle(12, 50, 371, 23));
			jLabel_text2.setText("【更多项目教程：http://programmer.ischoolbar.com】！");
			jLabel_text1 = new JLabel();
			jLabel_text1.setBounds(new Rectangle(10, 22, 373, 23));
			jLabel_text1.setText("选修课程管理系统 All right reserved By :artisan");
			
			
			jButton_ok = new JButton("确定");
			jButton_ok.setBounds(new Rectangle(331, 45, 70, 26));
			jContentPane = new JPanel();
			jContentPane.setLayout(null);
			jContentPane.setBackground(new Color(255, 254, 254));
			jContentPane.add(jLabel_text1, null);
			//jContentPane.add(jButton_ok, null);
			jContentPane.add(jLabel_text2, null);
			
			this.setContentPane(jContentPane);
	}

}
