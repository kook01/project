using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Runtime.InteropServices;
using System.IO;

namespace ictbis2
{
    class classini
    {
        public string inifilename { get; set; }
        public string path { get; set; }
        public string pathtxtfile { get; set; }

        [DllImport("kernel32")]
        private static extern long WritePrivateProfileString(string section,
          string key, string val, string filePath);

        [DllImport("kernel32")]
        private static extern int GetPrivateProfileString(string section,
          string key, string def, StringBuilder retVal,
          int size, string filePath);

        public classini()
        {

            this.inifilename = this.chkfileini("confgsn");
            chkpathtxtfile();
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

        public string chkfileini(string filename) 
        {
            string returnfilename = string.Empty;
            string directory = AppDomain.CurrentDomain.BaseDirectory;
            this.path = directory + "\\" + filename + ".ini";
            returnfilename = this.path;
            return returnfilename;
        }

        public void chkpathtxtfile()
        {
            string directory = AppDomain.CurrentDomain.BaseDirectory;
            string readdata = this.IniReadValue("serialname", "path");
            this.pathtxtfile = directory + "\\" + readdata;
        }


        public bool CreateInifile()
        {
            bool boolreturn;
            if (File.Exists(inifilename))
            {
               // Nothing to do.
                boolreturn = false;
            }
            else
            {
                // Create file
                File.Create(inifilename).Dispose();
                boolreturn = true;
            }
            return boolreturn;
        }

        //For Read data path txt file (Serial.TXT)
        public string[] readdata()
        {
            // string[] tmpreturn = null;
            string[] lines = File.ReadAllLines(this.pathtxtfile, Encoding.UTF8);
            return lines;
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

        }



    }
}
