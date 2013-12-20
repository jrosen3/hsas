import PIL
from PIL import Image
from os import listdir
from os.path import isfile, join


path = '2012'
pics = [ f for f in listdir(path) if isfile(join(path,f)) ][1:]

for pic in pics:
	opn = '%s/%s' % (path, pic)
	img = Image.open(opn)
	w = float(img.size[0])
	h = float(img.size[1])
	if w >= h:
		basewidth = 512
		wpercent = (basewidth / w)
		hsize = int(h * wpercent)
		img = img.resize((basewidth, hsize), PIL.Image.ANTIALIAS)
		name = '%s/resize/%s' % (path, pic)
		img.save(name, 'JPEG')
	else:
		baseheight = 512
		hpercent = (baseheight / h)
		wsize = int(w * hpercent)
		img = img.resize((wsize, baseheight), PIL.Image.ANTIALIAS)
		name = '%s/resize/%s' % (path, pic)
		img.save(name, 'JPEG')


