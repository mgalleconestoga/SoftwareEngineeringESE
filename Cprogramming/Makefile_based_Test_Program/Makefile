IDIR =/usr/include
LDIR =-L/usr/lib/x86_64-linux-gnu/
CC=g++
CFLAGS=-I$(IDIR)
ODIR=obj
SRC=src

LIBS=-l:libmysqlcppconn.so 

_OBJ = main.o 
OBJ = $(patsubst %,$(ODIR)/%,$(_OBJ))

main: $(OBJ)									# default goal - compile all .o files in obj to main (executable)
	g++ -o $@ $^ $(CFLAGS) $(LDIR) $(LIBS)

$(ODIR)/%.o: $(SRC)/%.cpp						# compile all .cpp files in src to .o files in obj 
	$(CC) -c -o $@ $< $(CFLAGS)

.PHONY: clean

clean:
	rm -f $(ODIR)/*.o *~ core $(INCDIR)/*~
