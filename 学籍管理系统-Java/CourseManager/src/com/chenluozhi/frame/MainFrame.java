package com.chenluozhi.frame;

import java.awt.AWTException;
import java.awt.Dimension;
import java.awt.Image;
import java.awt.MenuItem;
import java.awt.PopupMenu;
import java.awt.Rectangle;
import java.awt.SystemTray;
import java.awt.Toolkit;
import java.awt.TrayIcon;
import java.awt.TrayIcon.MessageType;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.io.File;
import java.io.IOException;
import java.net.URL;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;

import com.chenluozhi.util.DBConnection;
import com.chenluozhi.util.DBInit;

public class MainFrame extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel jContentPane = null;
	private JMenu jMenu_start = null;
	private JMenuBar jJMenuBar = null;
	private JMenu jMenu_backstage  = null;
	private JMenu jMenu_ccourse = null;
	private JMenu jMenu_mark = null;
	private JMenu jMenu_help = null;
	private JMenuItem jMenuItem_relogin = null;
	public JMenuItem jMenuItem_initDB = null;
	private JMenuItem jMenuItem_change_password = null;
	public JMenuItem jMenuItem_user_manage = null;
	private JMenuItem jMenuItem_hang_system = null;
	private JMenuItem jMenuItem_exit = null;
	private JMenuItem jMenuItem_student_manage = null;
	private JMenuItem jMenuItem_teacher_manage = null;
	private JMenuItem jMenuItem_course_manage = null;
	private JMenuItem jMenuItem_grade_class = null;
	private JMenuItem jMenuItem_class = null;
	private JMenuItem jMenuItem_about = null;
	private JMenuItem jMenuItem_online_update = null;
	
	
	private JMenuItem jMenuItem_sys_info = null;
	public JMenuItem jMenuItem_operate_log = null;
	private JMenuItem jMenuItem_ccourse = null;
	private JMenuItem jMenuItem_ccourse_add = null;
	private JMenuItem jMenuItem_mark_add = null;
	private JMenuItem jMenuItem_mark_statistics = null;
	private JLabel jLabel = null;
	private URL imgURL = null;
	private SystemTray sysTray = SystemTray.getSystemTray();
	
	Image image = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/com/chenluozhi/images/icon.png"));
	private TrayIcon trayicon = new TrayIcon(image, "选课管理系统", createMenu());

	public MainFrame() {
		super();
		initialize();
		initPrivilege();
	}

	private void initialize() {		
		this.setSize(800, 544);// 主界面大小
		this.setTitle("选修课程管理系统 V1.2");
		imgURL = this.getClass().getResource("/com/chenluozhi/images/icon.png");
		this.setIconImage(Toolkit.getDefaultToolkit().getImage(imgURL));
		this.setLocationRelativeTo(null);
		this.setResizable(false);
		this.setVisible(true);
		
		
		this.addWindowListener(new WindowAdapter()// 系统关闭事件
		{
			public void windowClosing(WindowEvent e) {
				SystemTrayInitial();//初始化托盘图标
			}
		});

		jMenuItem_relogin = new JMenuItem();
		jMenuItem_relogin.setText("重新登录");
		jMenuItem_operate_log = new JMenuItem();
		jMenuItem_operate_log.setText("操作日志");
		jMenuItem_change_password = new JMenuItem();
		jMenuItem_change_password.setText("修改密码");
		jMenuItem_user_manage = new JMenuItem();
		jMenuItem_user_manage.setText("用户管理");
		jMenuItem_initDB = new JMenuItem();
		jMenuItem_initDB.setText("初始化数据库");
		jMenuItem_hang_system = new JMenuItem();
		jMenuItem_hang_system.setText("挂机");
		jMenuItem_exit = new JMenuItem();
		jMenuItem_exit.setText("退出");
		jMenuItem_student_manage = new JMenuItem();
		jMenuItem_student_manage.setText("学生信息管理");
		jMenuItem_teacher_manage = new JMenuItem();
		jMenuItem_teacher_manage.setText("教师信息管理");
		jMenuItem_course_manage = new JMenuItem();
		jMenuItem_course_manage.setText("课程信息管理");
		jMenuItem_grade_class = new JMenuItem();
		jMenuItem_grade_class.setText("年级信息管理");
		jMenuItem_class = new JMenuItem();
		jMenuItem_class.setText("班级信息管理");
		jMenuItem_ccourse_add = new JMenuItem();
		jMenuItem_ccourse_add.setText("选课录入");
		jMenuItem_ccourse = new JMenuItem();
		jMenuItem_ccourse.setText("选课总览");
		
		jMenuItem_mark_add = new JMenuItem();
		jMenuItem_mark_add.setText("成绩录入");
		jMenuItem_mark_statistics = new JMenuItem();
		jMenuItem_mark_statistics.setText("成绩统计");
		
		
		
		jMenuItem_about = new JMenuItem();
		jMenuItem_about.setText("关于系统");
		jMenuItem_sys_info = new JMenuItem();
		jMenuItem_sys_info.setText("系统说明");
		
		jMenuItem_online_update = new JMenuItem();
		jMenuItem_online_update.setText("在线升级");
		
		
		jMenu_start = new JMenu();
		jMenu_start.setText("开始菜单");
		jMenu_start.add(jMenuItem_relogin);
		jMenu_start.add(jMenuItem_change_password);
		jMenu_start.add(jMenuItem_user_manage);
		jMenu_start.add(jMenuItem_operate_log);
		jMenu_start.add(jMenuItem_initDB);
		jMenu_start.addSeparator();// 分割线
		//jMenu_start.add(jMenuItem_hang_system);
		jMenu_start.add(jMenuItem_exit);
		jMenu_backstage  = new JMenu();
		jMenu_backstage .setText("后台管理");
		jMenu_backstage .add(jMenuItem_student_manage);
		jMenu_backstage .add(jMenuItem_teacher_manage);
		jMenu_backstage .add(jMenuItem_course_manage);
		jMenu_backstage .add(jMenuItem_grade_class);
		jMenu_backstage .add(jMenuItem_class);
		jMenu_ccourse = new JMenu();
		jMenu_ccourse.setText("选课情况");
		jMenu_ccourse.add(jMenuItem_ccourse_add);
		jMenu_ccourse.add(jMenuItem_ccourse);
		
		jMenu_mark = new JMenu();
		jMenu_mark.setText("成绩管理");
		jMenu_mark.add(jMenuItem_mark_add);
		jMenu_mark.add(jMenuItem_mark_statistics);
		
		
		jMenu_help = new JMenu();
		jMenu_help.setText("帮助");
		jMenu_help.add(jMenuItem_about);
		jMenu_help.add(jMenuItem_sys_info);
		//jMenu_help.add(jMenuItem_online_update);
		jJMenuBar = new JMenuBar();
		jJMenuBar.setPreferredSize(new Dimension(10, 25));
		jJMenuBar.add(jMenu_start);
		jJMenuBar.add(jMenu_backstage );
		jJMenuBar.add(jMenu_ccourse);
		jJMenuBar.add(jMenu_mark);
		
		jJMenuBar.add(jMenu_help);
		
		setJMenuBar(jJMenuBar);

		jLabel = new JLabel();
		jLabel.setText("JLabel");
		jLabel.setBounds(new Rectangle(1, -2, 800, 544));
		imgURL = this.getClass().getResource("/com/chenluozhi/images/main.jpg");
		jLabel.setIcon(new ImageIcon(imgURL));

		jContentPane = new JPanel();
		jContentPane.setLayout(null);
		jContentPane.add(jLabel, null);
		setContentPane(jContentPane);
		
		btnListener btn = new btnListener();
		jMenuItem_relogin.addActionListener(btn);
		jMenuItem_change_password.addActionListener(btn);
		jMenuItem_user_manage.addActionListener(btn);
		jMenuItem_initDB.addActionListener(btn);
		jMenuItem_operate_log.addActionListener(btn);
		jMenuItem_hang_system.addActionListener(btn);
		jMenuItem_exit.addActionListener(btn);
		jMenuItem_student_manage.addActionListener(btn);
		jMenuItem_teacher_manage.addActionListener(btn);
		jMenuItem_course_manage.addActionListener(btn);
		jMenuItem_grade_class.addActionListener(btn);
		jMenuItem_class.addActionListener(btn);
		jMenuItem_ccourse_add.addActionListener(btn);
		jMenuItem_about.addActionListener(btn);
		jMenuItem_mark_add.addActionListener(btn);
		jMenuItem_mark_statistics.addActionListener(btn);
		jMenuItem_ccourse.addActionListener(btn);
		jMenuItem_sys_info.addActionListener(btn);
		
	}
/**
 * @初始化托盘
 */
	private void SystemTrayInitial() { // 托盘
		if (!SystemTray.isSupported()) // 判断当前系统是否支持系统栏
			return;
				try {
					sysTray.add(trayicon);
				} catch (AWTException e1) {
					e1.printStackTrace();
				}
				setVisible(false);
				trayicon.displayMessage("选课管理系统--By Artisan", "选课管理系统\n【猿来入此】\n网址：http://programmer.ischoolbar.com", MessageType.INFO);// 窗体托盘时所显示的消息对话
			trayicon.addActionListener(new ActionListener()// 击图标时显示窗体
					{
						public void actionPerformed(ActionEvent e) {
							sysTray.remove(trayicon);
							setVisible(true);
						}
					});
	}
/**
 * @初始化托盘右键
 * @return
 */
	private PopupMenu createMenu() { // 创建系统栏菜单的方法
		PopupMenu menu = new PopupMenu();
		MenuItem exitItem = new MenuItem("退出本系统");
		exitItem.addActionListener(new ActionListener() { // 系统栏退出事件
					public void actionPerformed(ActionEvent e) {
						System.exit(0);
					}
				});
		MenuItem openItem = new MenuItem("打开主窗口");
		openItem.addActionListener(new ActionListener() {// 系统栏打开菜单项事件
					public void actionPerformed(ActionEvent e) {
						if (!isVisible()) {
							setVisible(true);
							sysTray.remove(trayicon);
						}
					}
				});
		
		MenuItem viewItem = new MenuItem("访问作者主页【猿来入此】");
		viewItem.addActionListener(new ActionListener() {// 系统栏打开菜单项事件
					public void actionPerformed(ActionEvent e) {
						try {
							Runtime.getRuntime().exec("explorer http://programmer.ischoolbar.com");
						} catch (IOException e1) {
							// TODO Auto-generated catch block
							e1.printStackTrace();
						}

					}
				});
		
		
		menu.add(openItem);
		menu.add(viewItem);
		menu.addSeparator();
		menu.add(exitItem);
		return menu;
	}

	public void initPrivilege(){
		if(Login.login_user_type==1){
			jMenuItem_change_password.setEnabled(false);
			jMenuItem_operate_log.setEnabled(false);
			jMenuItem_initDB.setEnabled(false);
			jMenuItem_user_manage.setEnabled(false);
			jMenu_backstage .setEnabled(false);
			
		}else if(Login.login_user_type==0){			
		}else if(Login.login_user_type==2){
			
			jMenuItem_change_password.setEnabled(false);
			jMenuItem_operate_log.setEnabled(false);
			jMenuItem_initDB.setEnabled(false);
			jMenuItem_user_manage.setEnabled(false);
			jMenuItem_sys_info.setEnabled(false);
					
			jMenu_mark.setEnabled(false);
			jMenu_backstage .setEnabled(false);
			
		}else{
			jMenuItem_change_password.setEnabled(false);
			jMenuItem_operate_log.setEnabled(false);
			jMenuItem_initDB.setEnabled(false);
			jMenuItem_user_manage.setEnabled(false);
			jMenuItem_sys_info.setEnabled(false);
					
			jMenu_mark.setEnabled(false);
			jMenu_backstage .setEnabled(false);
			
		}
		
	}

	public class btnListener implements ActionListener {
		public void actionPerformed(ActionEvent e) {
			if (e.getSource() == jMenuItem_relogin) {
				dispose();
				Login login = new Login();// 调用无参数构造方法，避免音乐重复播放
				login.setVisible(true);
			} else if (e.getSource() == jMenuItem_change_password) {
				if(Login.login_user_type!=0)
					{JOptionPane.showMessageDialog(null, "对不起，非后台管理员暂不提供修改密码功能");
					return;
					}
			
				UserChangePassword cp = new UserChangePassword();
				cp.setVisible(true);
			} else if (e.getSource() == jMenuItem_user_manage) {
			
				UserManage um = new UserManage();
				um.setVisible(true);
			} else if (e.getSource() == jMenuItem_operate_log) {
				LogManage lm = new LogManage();
				lm.setVisible(true);
			} else if (e.getSource() == jMenuItem_hang_system) {
				DBConnection.update(Login.storeUserName + "   执行挂机操作！");
				JOptionPane.showMessageDialog(null, "暂未考虑加入挂机功能！");
			} else if (e.getSource() == jMenuItem_initDB) {

		
				DBInit di = new DBInit();
				di.setVisible(true);
			} else if (e.getSource() == jMenuItem_exit) {

				System.exit(0);
			} else if (e.getSource() == jMenuItem_student_manage) {
				StudentManage sm = new StudentManage();
				sm.setVisible(true);
			} else if (e.getSource() == jMenuItem_teacher_manage) {
		
				TeacherManage tm = new TeacherManage();
				tm.setVisible(true);
			}else if (e.getSource() == jMenuItem_grade_class) {
				//JOptionPane.showMessageDialog(null, "功能优化中...敬请期待！");
				GradeManage gm = new GradeManage();
				gm.setVisible(true);
			} else if(e.getSource() == jMenuItem_class){
				ClassManage cm= new ClassManage();
				cm.setVisible(true);
				//JOptionPane.showMessageDialog(null, "功能优化中...敬请期待！");
			}else if (e.getSource() == jMenuItem_course_manage) {
			
				CourseManage cm = new CourseManage();
				cm.setVisible(true);
			} else if (e.getSource() == jMenuItem_ccourse_add) {
			
				CCourseAdd cm = new CCourseAdd();
				cm.setVisible(true);
			} else if (e.getSource() == jMenuItem_ccourse) {
				CCourseManage cci = new CCourseManage();
				cci.setVisible(true);
			}else if (e.getSource() == jMenuItem_mark_add) {
				
				CCourseMarkAdd ccma = new CCourseMarkAdd();
				ccma.setVisible(true);

				
				
			}else if (e.getSource() == jMenuItem_mark_statistics) {
				CCourseMarkStatistic ccs = new CCourseMarkStatistic();
				ccs.setVisible(true);
			} 
			else if (e.getSource() == jMenuItem_about) {
				About ab = new About();
				ab.setVisible(true);
			} else if (e.getSource() == jMenuItem_sys_info) {
				try {
					String fp = System.getProperty("user.dir") + "\\readme.txt";
					File f = new File(fp);
					if (f.exists()) {
						Runtime.getRuntime().exec(" notepad.exe " + fp);
					} else {
						JOptionPane.showMessageDialog(null, "【猿来入此】~" + "\n"
								+ "http://programmer.ischoolbar.com");
					}
				} catch (Exception e1) {
					e1.printStackTrace();
				}

			}
		}

	}
	
	
	public static void main(String[] args) {
		MainFrame login = new MainFrame();
		login.setVisible(true);
	}

}
