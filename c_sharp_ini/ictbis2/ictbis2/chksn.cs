using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ictbis2
{
    class chksn
    {
        public string sn_express { get; set; }
        public string sn_ictbis { get; set; }
        decryptsn desn = new decryptsn();
        public chksn()
        {

        }

        /*
         *1. get data sn_express from textbox sn_express
         *2. get data encrpt from textbox textbox sn_ictbis
         *3. decryrpt use degit sn1 only
         *4. compare data(3) with data(1) 
         *  4.1 if it same data it's true 
         *  4.2 if it not same data it's false
         *  */

        public bool chksn_decrpt(string paramsn_express, string paramsn_ictbis)
        {
            bool return_bool = false;
            string tmp_sn1 = string.Empty;

            desn.Showdataback(paramsn_ictbis);
            tmp_sn1 = desn.sn1;
            if (paramsn_express == tmp_sn1)
            {
                return_bool = true;
            }
            else
            {
                return_bool = false;
            }
            return return_bool;
        }

    }
}
