using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Runtime.InteropServices;
using System.Text;
using System.Web;
using System.Web.Hosting;

namespace WebApplication_4.cls
{
    public class clsreadwriteini
    {
        public string path;
        public string URL;

        [DllImport("kernel32")]
        private static extern long WritePrivateProfileString(string section,
          string key, string val, string filePath);

        [DllImport("kernel32")]
        private static extern int GetPrivateProfileString(string section,
          string key, string def, StringBuilder retVal,
          int size, string filePath);

        public clsreadwriteini(string fileininame)
        {
            URL = HostingEnvironment.MapPath("/") + "fileutil\\";
            path = URL + fileininame;

            if (!File.Exists(path))
            {
                this.CreateInifile(path);
            }

        }

        public bool IniWriteValue(string Section, string Key, string Value)  //void
        {
            WritePrivateProfileString(Section, Key, Value, this.path);
            return true;
            /* if you want to remove section, please insert key data to "null" and insert value data to "null" 
             example. IniWriteValue(Section, null, null)
             */
        }

        public string IniReadValue(string Section, string Key)
        {
            StringBuilder temp = new StringBuilder(255);
            int i = GetPrivateProfileString(Section, Key, "", temp, 255, this.path);
            return temp.ToString();
        }

        public bool CreateInifile(string paramfilename)
        {
            FileStream fs = null;
            bool boolreturn;
            using (fs = File.Create(paramfilename))
            {
                boolreturn = true;
            }
            
            return boolreturn;
        }

        public bool DelInifile(string paramfilename)
        {
            bool boolreturn = false;
            if (File.Exists(paramfilename))
            {
                File.Delete(paramfilename);
                boolreturn = true;
            }
            return boolreturn;
            
            //cls.clsreadwriteini ini = new cls.clsreadwriteini("abc.ini");
            //if (ini.DelInifile(ini.path))
            //{
            //    Label1.Text = "Del OK";
            //}else
            //{
            //    Label1.Text = "Del not OK";
            //}
             
        }
    }
}